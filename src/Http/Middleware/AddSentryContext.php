<?php

namespace Northwestern\SysDev\UI\Http\Middleware;

use Illuminate\Http\Request;
use Northwestern\SysDev\UI\Providers\NorthwesternUiServiceProvider;
use Sentry\State\Scope;
use Closure;

class AddSentryContext
{
    public function handle(Request $request, Closure $next)
    {
        $contextBuilder = NorthwesternUiServiceProvider::getSentryUserContext();
        if (! $contextBuilder) {
            return $next($request);
        }

        \Sentry\configureScope(function (Scope $scope) use ($request, $contextBuilder) {
            $scope->setUser($contextBuilder($request->user()));
        });

        return $next($request);
    }
}
