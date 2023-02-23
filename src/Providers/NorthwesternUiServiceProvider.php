<?php

namespace Northwestern\SysDev\UI\Providers;

use Closure;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Laravel\Ui\UiCommand;
use Northwestern\SysDev\UI\Http\Controllers\SentryTunnelController;
use Northwestern\SysDev\UI\Presets\Northwestern;

class NorthwesternUiServiceProvider extends ServiceProvider
{
    /** @var ?Closure */
    protected static $sentryContextBuilder;

    /**
     * Pass in a callback that takes on parameter, the request's authenticated user (or null, if unauthenticated) and
     * returns an array of keys and values to add to the Sentry context. The values should be scalars.
     *
     * For example:
     * <code>
     * NorthwesternUiServiceProvider::setSentryUserContext(function (Authenticatable $user) {
     *     return [
     *         'ip' => request()->getClientIp(),
     *         'username' => $user->userName,
     *         'segment' => $user->type,
     *     ];
     * });
     * </code>
     *
     * If this is not set, the middleware won't do anything, and Sentry's default behaviour will attempt to add some
     * basic user information to the context.
     */
    public static function setSentryUserContext(Closure $closure)
    {
        self::$sentryContextBuilder = $closure;
    }

    /**
     * @return ?Closure
     */
    public static function getSentryUserContext()
    {
        return self::$sentryContextBuilder;
    }

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
                'tunnel' => Route::has('sentry.tunnel') ? route('sentry.tunnel', [], false) : null,
                'integrations' => [], // add to integrations in blade since it has to init js object
                'enable_apm' => (bool) config('northwestern-theme.sentry-enable-apm-js'),
                'tracesSampleRate' => config('northwestern-theme.sentry-traces-sample-rate'),
            ]);

            $contextBuilder = NorthwesternUiServiceProvider::getSentryUserContext();
            if ($contextBuilder) {
                $view->with('sentry_user_context', $contextBuilder(auth()->user()));
            }
        });

        Route::macro('sentryTunnel', function ($withoutMiddleware = [], $path = 'sentry/tunnel') {
            Route::post($path, SentryTunnelController::class)
                ->withoutMiddleware($withoutMiddleware)
                ->name('sentry.tunnel');
        });
    }
}
