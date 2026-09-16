<?php

namespace Northwestern\SysDev\UI\Tests\Feature;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Northwestern\SysDev\UI\Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

final class SentryTunnelControllerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Route::sentryTunnel();
    }

    private function envelope(string $dsn): string
    {
        return json_encode(['dsn' => $dsn])."\n".json_encode(['type' => 'event']);
    }

    #[Test]
    public function missing_dsn_returns_422(): void
    {
        Http::fake();

        $this->call('POST', 'sentry/tunnel', [], [], [], [], json_encode(['type' => 'event']))
            ->assertStatus(422)
            ->assertSee('No DSN in envelope');

        Http::assertNothingSent();
    }

    #[Test]
    public function zero_project_id_is_aborted(): void
    {
        Http::fake();

        $this->call('POST', 'sentry/tunnel', [], [], [], [], $this->envelope('https://abc123@sentry.io/0'))
            ->assertStatus(422)
            ->assertSee('Project ID not found in envelope');

        Http::assertNothingSent();
    }

    #[Test]
    public function non_numeric_project_id_is_aborted(): void
    {
        Http::fake();

        $this->call('POST', 'sentry/tunnel', [], [], [], [], $this->envelope('https://abc123@sentry.io/'))
            ->assertStatus(422)
            ->assertSee('Project ID not found in envelope');

        Http::assertNothingSent();
    }

    #[Test]
    public function valid_project_id_is_forwarded_to_sentry(): void
    {
        Http::fake([
            'sentry.io/*' => Http::response('', 200),
        ]);

        $envelope = $this->envelope('https://abc123@sentry.io/12345');

        $this->call('POST', 'sentry/tunnel', [], [], [], [], $envelope)
            ->assertOk();

        Http::assertSent(function ($request) use ($envelope) {
            return $request->url() === 'https://sentry.io/api/12345/envelope/'
                && $request->body() === $envelope;
        });
    }
}
