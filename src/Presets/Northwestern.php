<?php

namespace Northwestern\SysDev\UI\Presets;

use Laravel\Ui\Presets;

class Northwestern extends Presets\Preset
{
    public static function install()
    {
        // This theme is built off the Bootstrap preset, so run the install for that to begin.
        Presets\Bootstrap::install();

        static::updatePackages();
        static::updateSass();
        static::updateBootstrapping();
        static::updateLayout();
        static::removeNodeModules();
    }

    protected static function updatePackageArray(array $packages)
    {
        return [
            '@fortawesome/fontawesome-free' => '^5.13.0',
            '@sentry/browser' => '^5.11.0',
        ] + $packages;
    }

    protected static function updateSass()
    {
        $manifest = [
            '_variables',
            'app',
            'nu_fonts',
            'nu_purple_layout',
            'social_icons',
        ];

        foreach ($manifest as $file) {
            copy(__DIR__."/northwestern-stubs/sass/${file}.scss", resource_path("sass/${file}.scss"));
        }
    }

    protected static function updateBootstrapping()
    {
        /*
        * Append the Sentry client-side SDK initialization stuff to 
        * the Bootstrap preset's bootstrap.js file.
        *
        * Since we re-initalized w/ the Bootstrap preset, we do not need
        * to check and see if this code was already appended -- it's a fresh slate.
        */
        $snippet = file_get_contents(__DIR__.'/northwestern-stubs/js/sentry.js');

        file_put_contents(resource_path('js/bootstrap.js'), $snippet, FILE_APPEND);
    }

    protected static function updateLayout()
    {
        $manifest = [
            'errors',
            'flash',
            'purple-chrome',
            'purple-container',
            'purple-widescreen',
        ];

        if (is_dir(resource_path('views/layout')) === false) {
            mkdir(resource_path('views/layout'));
        }

        // If the _nav file was previously ejected, DO NOT overwrite it. 
        // This is where lots of customization will happen.
        if (file_exists(resource_path('views/layout/_nav.blade.php')) === false) {
            $manifest[] = '_nav';
        }

        foreach ($manifest as $file) {
            copy(__DIR__."/northwestern-stubs/views/layout/${file}.blade.php", resource_path("views/layout/${file}.blade.php"));
        }
    }
}