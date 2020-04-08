<?php

namespace Northwestern\SysDev\UI\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Laravel\Ui\UiCommand;
use Northwestern\SysDev\UI\Presets\Northwestern;

class NorthwesternUiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/northwestern-theme.php', 'northwestern-theme');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/northwestern-theme.php' => config_path('northwestern-theme.php'),
        ], 'config');

        if ($this->app->runningInConsole()) {
            UiCommand::macro('northwestern', function () {
                Northwestern::install();

                $this->info('Bootstrap scaffolding w/ Northwestern theme installed successfully.');
                $this->comment('Please run "yarn install && yarn run dev" to compile your fresh scaffolding.');

                if ($this->option('auth')) {
                    $this->call('ui:auth');
                }
            });
        }

        View::composer('layout.purple-chrome', function ($view) {
            $view->with('sentry_config', [
                'dsn' => config('northwestern-theme.sentry-dsn'),
                'environment' => config('app.env'),
            ]);
        });

    }
}