<?php

namespace Northwestern\SysDev\UI\Tests;

use Northwestern\SysDev\UI\Providers\NorthwesternUiServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getEnvironmentSetUp($app)
    {
        parent::getEnvironmentSetUp($app);

        // No logger, so we need the exception available on responses instead of a 500 error page
        $app['config']->set('app.debug', true);

        // These will be ejected into the developer's app in real life, 
        // so use the stub dir as the pretend-app's view folder.
        $app['config']->set('view.paths', [__DIR__.'/../src/Presets/northwestern-stubs/views']);

        // So mix can find the dummy mix-manifest.json file
        $app->instance('path.public', __DIR__);
    }

    protected function getPackageProviders($application)
    {
        return [NorthwesternUiServiceProvider::class];
    }
}