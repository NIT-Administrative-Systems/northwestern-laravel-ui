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
        $this->mergeConfigFrom(__DIR__.'/../../config/northwestern-theme.php', 'northwestern-theme');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/northwestern-theme.php' => config_path('northwestern-theme.php'),
        ], 'config');

        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'northwestern');

        if ($this->app->runningInConsole()) {
            UiCommand::macro('northwestern', function ($console) {
                Northwestern::install();

                $console->info('Bootstrap scaffolding w/ Northwestern theme installed successfully.');
                $console->comment('Please run "yarn install && yarn run dev" to compile your fresh scaffolding.');

                if ($console->option('auth')) {
                    $console->call('ui:auth');
                }
            });
        }

        View::composer('northwestern::purple-chrome', function ($view) {
            $view->with('load_livewire', $this->app->bound('livewire'));

            $view->with('sentry_config', [
                'dsn' => config('northwestern-theme.sentry-dsn'),
                'environment' => config('app.env'),
            ]);
        });

    }
}