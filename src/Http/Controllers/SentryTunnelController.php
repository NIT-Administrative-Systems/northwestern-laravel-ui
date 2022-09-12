<?php

namespace Northwestern\SysDev\UI\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SentryTunnelController
{
    public function __invoke(Request $request)
    {
        $envelope = $request->getContent();
        $pieces = explode("\n", $envelope, 2);
        $header = json_decode($pieces[0], true);

        if (! isset($header['dsn'])) {
            return response('No DSN in envelope', 422);
        }

        $dsn = parse_url($header['dsn']);
        $projectId = intval(trim($dsn['path'], '/'));
        abort_unless($projectId, 422, 'Project ID not found in envelope');

        // The trailing slash is important (otherwise Sentry gives you a 404)
        $sentryUrl = sprintf('https://sentry.io/api/%s/envelope/', $projectId);

        return Http::withBody($envelope, 'application/x-sentry-envelope')
            ->post($sentryUrl);
    }
}