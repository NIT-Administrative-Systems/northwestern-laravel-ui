<?php

namespace Northwestern\SysDev\UI\Tests;

use PHPUnit\Framework\Attributes\Test;
use Illuminate\Support\Str;
use Northwestern\SysDev\UI\Providers\NorthwesternUiServiceProvider;

class TestProviderWorks extends TestCase
{
    #[Test]
    public function config_loads(): void
    {
        // Makes sure the provider is working
        // It's not much, but we can't really test a huge heap of views?
        $this->assertNotNull(config('northwestern-theme.lockup'));
    }

    #[Test]
    public function renders(): void
    {
        $this->app['router']->get(__METHOD__, function () {
            return view('northwestern::demo-styles');
        });

        $this->get(__METHOD__)
            ->assertOk()
            ->assertSeeText(config('northwestern-theme.office.phone'))
            ->assertDontSee('Sentry.init');
    }

    #[Test]
    public function sentry_configured(): void
    {
        $this->app['config']->set('northwestern-theme.sentry-dsn', 'sentry-dsn-mocked-value-woohoo');

        $this->app['router']->get(__METHOD__, function () {
            return view('northwestern::demo-styles');
        });

        $this->get(__METHOD__)
            ->assertOk()
            ->assertSee('Sentry.init')
            ->assertDontSee('Sentry.setUser')
            ->assertSee(config('northwestern-theme.sentry-dsn'));
    }

    #[Test]
    public function sentry_user_context(): void
    {
        $this->app['config']->set('northwestern-theme.sentry-dsn', 'sentry-dsn-mocked-value-woohoo');

        $this->app['router']->get(__METHOD__, function () {
            return view('northwestern::demo-styles');
        });

        $uuid = Str::uuid();
        NorthwesternUiServiceProvider::setSentryUserContext(function ($user) use ($uuid) {
            return [
                'foo' => $uuid,
            ];
        });

        $this->get(__METHOD__)
            ->assertOk()
            ->assertSee('Sentry.init')
            ->assertSee('Sentry.setUser')
            ->assertSee($uuid)
            ->assertSee(config('northwestern-theme.sentry-dsn'));
    }
}