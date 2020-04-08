# Northwestern Bootstrap Preset for Laravel
Ejects a Northwestern Bootstrap theme into your Laravel application.

## Installation
```sh
composer require northwestern-sysdev/laravel-soa
php artisan vendor:publish --provider="Northwestern\SysDev\UI\Providers\NorthwesternUiServiceProvider"

php artisan ui --preset=northwestern # you can add --auth if you need the register/login stuff
```

You will want to customize the `layout._nav` view, so it has appropriate navigation items.

## Usage
You will have two layouts available. Both layouts include the flash message in a Bootstrap alert:

- `layout.purple-container`: Content wrapped in a [Bootstrap container](https://getbootstrap.com/docs/4.4/layout/overview/)
- `layout.purple-widescreen`: Full-width site layout & sidebar slot -- ideal for datatables with filters :wink:

**TODOs**:

- Example for using both
- The errors view
- Script stack
- Sentry integration
- Including a page <title> when you render from controller

## Upgrading
Major versions will require you to eject the layout & sass files again. If you have made any customizations, they will be overwritten. 

The `resources/views/layout/_nav.blade.php` is an exception to this -- it will not be overwritten when you run the `ui` command a second time.

## Contributing
If you'd like to contribute to the library, you are welcome to submit a pull request!