<?php

return [
    // Should be either a full URL (http://...) or a file in your public folder (images/lockup.png)
    'lockup' => env('NU_THEME_LOCKUP', 'https://common.northwestern.edu/v8/css/images/northwestern.svg'),

    // Information used in the footer
    'office' => [
        'name' => env('NU_THEME_OFFICE_NAME', 'Information Technology'),
        'addr' => env('NU_THEME_OFFICE_ADDR', '1800 Sherman Ave'),
        'city' => env('NU_THEME_OFFICE_CITY', 'Evanston, IL 60201'),
        'phone' => env('NU_THEME_OFFICE_PHONE', '847-491-4357 (1-HELP)'),
        'email' => env('NU_THEME_OFFICE_EMAIL', 'consultant@northwestern.edu'),
    ],

    // If specified, the Sentry browser SDK will be activated.
    'sentry-dsn' => env('SENTRY_LARAVEL_DSN', env('SENTRY_DSN')),
    'sentry-enable-apm-js' => env('SENTRY_ENABLE_APM_FOR_JS', true),
    'sentry-traces-sample-rate' => env('SENTRY_TRACES_SAMPLE_RATE', 0.0),
];
