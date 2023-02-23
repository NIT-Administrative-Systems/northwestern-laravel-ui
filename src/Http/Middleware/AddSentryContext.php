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

        $context = $contextBuilder($request->user());
        \Sentry\configureScope(function (Scope $scope) use ($context) {
                $scope->setUser($context);
        });

        return $next($request);
    }
}
