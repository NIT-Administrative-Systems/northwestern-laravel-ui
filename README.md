# Northwestern Bootstrap Preset for Laravel
Adds a Northwestern Bootstrap theme into your Laravel application.

The Sentry browser SDK (for reporting on JS errors) will be automatically configured if you are using Sentry in the Laravel app.

## Installation
This package requires Laravel 7+.

```sh
composer require northwestern-sysdev/northwestern-laravel-ui
php artisan vendor:publish --provider="Northwestern\SysDev\UI\Providers\NorthwesternUiServiceProvider"

php artisan ui northwestern # you can add --auth if you need the register/login stuff
```

## Usage
You will have two layouts available. Both layouts include the flash message in a Bootstrap alert:

- `northwestern::purple-container`: Content wrapped in a [Bootstrap container](https://getbootstrap.com/docs/4.4/layout/overview/)
- `northwestern::purple-widescreen`: Full-width site layout & sidebar slot -- ideal for datatables with filters :wink:

The `resources/views/layout_navbar.blade.php` should be customized for your application.

**TODOs**:

- Example for using both
- The errors view
- Script stack
- Sentry integration
- Including a page <title> when you render from controller

## Contributing
If you'd like to contribute to the library, you are welcome to submit a pull request!