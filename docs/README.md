# Northwestern Bootstrap Preset for Laravel
Adds a Northwestern Bootstrap theme into your Laravel application.

The Sentry browser SDK (for reporting on JS errors) will be automatically configured if you are using Sentry in the Laravel app. You should [enable tunneling for the browser SDK](usage.md#sentry).

This depends on the `laravel/ui` package. It is mutually exclusive with Laravel Breeze/Jetstream, as those no longer use Bootstrap.

## Overview
The package modifies the default Bootstrap settings to be more purple, loads the Northwestern fonts, adds [Font Awesome icons](https://fontawesome.com/icons?d=gallery&m=free), and gives you a responsive ready-made site layout.

![Purple container layout](./assets/container-layout.png)

For the most part, the purple-ization is rolled out across all Bootstrap components and you will not need to do anything special to take advantage of it.

In order to use this package, you must:

- Be on Laravel 10+
- Use Yarn to manage your JS/CSS dependencies
- Use [Laravel Vite](https://laravel.com/docs/10.x/vite) to bundle your assets

## Installation
Install the package via composer, and then swap to the Northwestern preset. This works like the [standard Laravel UI presets](https://laravel.com/docs/7.x/frontend).

:::danger Overwrites Files
Changing your UI preset will overwrite some files in `resources/scss`, `resources/views`, and `resources/js`. 

If you are adding this to an existing app, make sure you have a backup of your project before changing the preset.
:::

The installation process is:

```sh
composer require northwestern-sysdev/northwestern-laravel-ui
php artisan vendor:publish --provider="Northwestern\SysDev\UI\Providers\NorthwesternUiServiceProvider"

php artisan ui northwestern # you can add --auth if you need the register/login stuff
```

You should review the `config/northwestern-theme.php` config file and adjust the default values. Alternatively, you may set them all as environment variables:

```bash
# Lockup image used in the header
# Should be either a full URL (http://...) or a file in your public folder (images/lockup.png)
NU_THEME_LOCKUP=https://common.northwestern.edu/v8/css/images/northwestern.svg

# Office & contact info used in the footer
NU_THEME_OFFICE_NAME=Information Technology
NU_THEME_OFFICE_ADDR=1800 Sherman Ave
NU_THEME_OFFICE_CITY=Evanston, IL 60201
NU_THEME_OFFICE_PHONE=(777) 777-777
NU_THEME_OFFICE_EMAIL=foo@example.org

# If you are using Sentry, specifying the DSN with the same environment variable
# will initialize the browser SDK to capture client-side JS errors.
#
# This is NOT required and can be ignored if you do not use Sentry.
SENTRY_LARAVEL_DSN=
```

The `resources/views/layout/_nav.blade.php` view will be created in your project. This is intended for you to customize with nav items, login links, and user info.

If you are using Sentry, you should [set up the tunneling route](usage.md#sentry) for the most reliable data captures from the browser SDK.

### Verifying the Installation
The package has a built-in demo view to showcase the layout & theme. The easiest way to see it is to add an entry to your `routes/web.php` file:

```php
Route::get('/demo', function () {
    return view('northwestern::demo-styles');
});
```

## Upgrading
### v2.1.0
This release introduces a Global Alert component and fixes some Bootstrap 5 compatibility issues.

See [the section on Global Alerts](usage.md#global-alerts) for more information on using this feature.

There are no breaking changes in this release.

### v2.0.0
This version drops support for Laravel Mix and Bootstrap 4. Laravel Vite and Bootstrap 5 are supported, and the layout has been adjusted accordingly.

There is an upgrade guide from [Laravel Mix](https://github.com/laravel/vite-plugin/blob/main/UPGRADE.md#migrating-from-laravel-mix-to-vite) that should be reviewed if upgrading to this package. The [assets ejected into your `resources/` folder](https://github.com/NIT-Administrative-Systems/northwestern-laravel-ui/tree/develop/src/Presets) should be updated.

The [Bootstrap 5 upgrade guide](https://getbootstrap.com/docs/5.2/migration/) should be reviewed. There are significant changes between Bootstrap v4 and v5.

### v1.9.0
This version adds support for Laravel 10 and drops support for PHP 7.4 and 8.0. The minimum required version is PHP 8.1.

Some colours in the `_variables.scss` have been updated to give better contrast.

### v1.8.0
This release adds a middleware for providing more user context and allows you to send APM data to Sentry.

Review [the section on Sentry](usage.md#sentry) to learn how to configure the new functionality.

The `config/sentry.php` file has been updated and has the following new options, which you should add to your config:

```php
return [
    // . . . the existing options . . .
    
    'sentry-enable-apm-js' => env('SENTRY_ENABLE_APM_FOR_JS', true),
    'sentry-traces-sample-rate' => env('SENTRY_TRACES_SAMPLE_RATE', 0.0),
];
```

The JS `@sentry/tracing` package should be installed for tracing.

### v1.7.0
This release adds a controller for Sentry's JavaScript browser SDK to tunnel through.

See [the new section on Sentry](usage.md#sentry) for more information on using this feature.

### v1.6.0
This release fixes accessibility concerns

There are no breaking changes in this release.

To get these changes on existing apps add the following to the `sass/nu_purple_layout.scss` in your app.

```css
//This overrides bootstrap default [color: hsla(0,0%,100%,.5);] for accessibility reasons
.navbar-dark .navbar-nav .nav-link {
    color: hsla(0,0%,100%,.6);
}
```

### v1.5.0
This release adds support for modifying the body tag.

There are no breaking changes.

### v1.4.0
This release supports Laravel 8.

There are no breaking changes in this release.

:::tip Laravel 8 Paginator
The framework changed the paginator to use TailwindCSS styles in Laravel 8.

If you are seeing very large angle brackets beneath your paginator, you need to [add `Paginator::useBootstrap()`](https://laravel.com/docs/8.x/upgrade#pagination-defaults) to your `AppServiceProvider`.
:::
