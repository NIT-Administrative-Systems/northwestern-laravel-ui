<?php

namespace Northwestern\SysDev\UI\Tests;

use Northwestern\SysDev\UI\Tests\TestCase;

class TestProviderWorks extends TestCase
{
    /** @test */
    public function config_loads()
    {
        // Makes sure the provider is working
        // It's not much, but we can't really test a huge heap of views?
        $this->assertNotNull(config('northwestern-theme.lockup'));
    }

    /** @test */
    public function renders()
    {
        $this->app['router']->get(__METHOD__, function () {
            return view('northwestern::demo-styles');
        });

        $this->get(__METHOD__)
            ->assertOk()
            ->assertSeeText(config('northwestern-theme.office.phone'))
            ->assertDontSee('Sentry.init');
    }

    /** @test */
    public function sentry_configured()
    {
        $this->app['config']->set('northwestern-theme.sentry-dsn', 'sentry-dsn-mocked-value-woohoo');

        $this->app['router']->get(__METHOD__, function () {
            return view('northwestern::demo-styles');
        });

        $this->get(__METHOD__)
            ->assertOk()
            ->assertSee('Sentry.init')
            ->assertSee(config('northwestern-theme.sentry-dsn'));
    }
}