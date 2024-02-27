(window.webpackJsonp=window.webpackJsonp||[]).push([[23],{273:function(e,t,s){e.exports=s.p+"assets/img/container-layout.36a0206d.png"},306:function(e,t,s){"use strict";s.r(t);var a=s(14),r=Object(a.a)({},(function(){var e=this,t=e._self._c;return t("ContentSlotsDistributor",{attrs:{"slot-key":e.$parent.slotKey}},[t("h1",{attrs:{id:"northwestern-bootstrap-preset-for-laravel"}},[t("a",{staticClass:"header-anchor",attrs:{href:"#northwestern-bootstrap-preset-for-laravel"}},[e._v("#")]),e._v(" Northwestern Bootstrap Preset for Laravel")]),e._v(" "),t("p",[e._v("Adds a Northwestern Bootstrap theme into your Laravel application.")]),e._v(" "),t("p",[e._v("The Sentry browser SDK (for reporting on JS errors) will be automatically configured if you are using Sentry in the Laravel app. You should "),t("RouterLink",{attrs:{to:"/usage.html#sentry"}},[e._v("enable tunneling for the browser SDK")]),e._v(".")],1),e._v(" "),t("p",[e._v("This depends on the "),t("code",[e._v("laravel/ui")]),e._v(" package. It is mutually exclusive with Laravel Breeze/Jetstream, as those no longer use Bootstrap.")]),e._v(" "),t("h2",{attrs:{id:"overview"}},[t("a",{staticClass:"header-anchor",attrs:{href:"#overview"}},[e._v("#")]),e._v(" Overview")]),e._v(" "),t("p",[e._v("The package modifies the default Bootstrap settings to be more purple, loads the Northwestern fonts, adds "),t("a",{attrs:{href:"https://fontawesome.com/icons?d=gallery&m=free",target:"_blank",rel:"noopener noreferrer"}},[e._v("Font Awesome icons"),t("OutboundLink")],1),e._v(", and gives you a responsive ready-made site layout.")]),e._v(" "),t("p",[t("img",{attrs:{src:s(273),alt:"Purple container layout"}})]),e._v(" "),t("p",[e._v("For the most part, the purple-ization is rolled out across all Bootstrap components and you will not need to do anything special to take advantage of it.")]),e._v(" "),t("p",[e._v("In order to use this package, you must:")]),e._v(" "),t("ul",[t("li",[e._v("Be on Laravel 10+")]),e._v(" "),t("li",[e._v("Use Yarn to manage your JS/CSS dependencies")]),e._v(" "),t("li",[e._v("Use "),t("a",{attrs:{href:"https://laravel.com/docs/10.x/vite",target:"_blank",rel:"noopener noreferrer"}},[e._v("Laravel Vite"),t("OutboundLink")],1),e._v(" to bundle your assets")])]),e._v(" "),t("h2",{attrs:{id:"installation"}},[t("a",{staticClass:"header-anchor",attrs:{href:"#installation"}},[e._v("#")]),e._v(" Installation")]),e._v(" "),t("p",[e._v("Install the package via composer, and then swap to the Northwestern preset. This works like the "),t("a",{attrs:{href:"https://laravel.com/docs/7.x/frontend",target:"_blank",rel:"noopener noreferrer"}},[e._v("standard Laravel UI presets"),t("OutboundLink")],1),e._v(".")]),e._v(" "),t("div",{staticClass:"custom-block danger"},[t("p",{staticClass:"custom-block-title"},[e._v("Overwrites Files")]),e._v(" "),t("p",[e._v("Changing your UI preset will overwrite some files in "),t("code",[e._v("resources/scss")]),e._v(", "),t("code",[e._v("resources/views")]),e._v(", and "),t("code",[e._v("resources/js")]),e._v(".")]),e._v(" "),t("p",[e._v("If you are adding this to an existing app, make sure you have a backup of your project before changing the preset.")])]),e._v(" "),t("p",[e._v("The installation process is:")]),e._v(" "),t("div",{staticClass:"language-sh extra-class"},[t("pre",{pre:!0,attrs:{class:"language-sh"}},[t("code",[t("span",{pre:!0,attrs:{class:"token function"}},[e._v("composer")]),e._v(" require northwestern-sysdev/northwestern-laravel-ui\nphp artisan vendor:publish "),t("span",{pre:!0,attrs:{class:"token parameter variable"}},[e._v("--provider")]),t("span",{pre:!0,attrs:{class:"token operator"}},[e._v("=")]),t("span",{pre:!0,attrs:{class:"token string"}},[e._v('"Northwestern\\SysDev\\UI\\Providers\\NorthwesternUiServiceProvider"')]),e._v("\n\nphp artisan ui northwestern "),t("span",{pre:!0,attrs:{class:"token comment"}},[e._v("# you can add --auth if you need the register/login stuff")]),e._v("\n")])])]),t("p",[e._v("You should review the "),t("code",[e._v("config/northwestern-theme.php")]),e._v(" config file and adjust the default values. Alternatively, you may set them all as environment variables:")]),e._v(" "),t("div",{staticClass:"language-bash extra-class"},[t("pre",{pre:!0,attrs:{class:"language-bash"}},[t("code",[t("span",{pre:!0,attrs:{class:"token comment"}},[e._v("# Lockup image used in the header")]),e._v("\n"),t("span",{pre:!0,attrs:{class:"token comment"}},[e._v("# Should be either a full URL (http://...) or a file in your public folder (images/lockup.png)")]),e._v("\n"),t("span",{pre:!0,attrs:{class:"token assign-left variable"}},[e._v("NU_THEME_LOCKUP")]),t("span",{pre:!0,attrs:{class:"token operator"}},[e._v("=")]),e._v("https://common.northwestern.edu/v8/css/images/northwestern.svg\n\n"),t("span",{pre:!0,attrs:{class:"token comment"}},[e._v("# Office & contact info used in the footer")]),e._v("\n"),t("span",{pre:!0,attrs:{class:"token assign-left variable"}},[e._v("NU_THEME_OFFICE_NAME")]),t("span",{pre:!0,attrs:{class:"token operator"}},[e._v("=")]),e._v("Information Technology\n"),t("span",{pre:!0,attrs:{class:"token assign-left variable"}},[e._v("NU_THEME_OFFICE_ADDR")]),t("span",{pre:!0,attrs:{class:"token operator"}},[e._v("=")]),t("span",{pre:!0,attrs:{class:"token number"}},[e._v("1800")]),e._v(" Sherman Ave\n"),t("span",{pre:!0,attrs:{class:"token assign-left variable"}},[e._v("NU_THEME_OFFICE_CITY")]),t("span",{pre:!0,attrs:{class:"token operator"}},[e._v("=")]),e._v("Evanston, IL "),t("span",{pre:!0,attrs:{class:"token number"}},[e._v("60201")]),e._v("\n"),t("span",{pre:!0,attrs:{class:"token assign-left variable"}},[e._v("NU_THEME_OFFICE_PHONE")]),t("span",{pre:!0,attrs:{class:"token operator"}},[e._v("=")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v("(")]),t("span",{pre:!0,attrs:{class:"token number"}},[e._v("777")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(")")]),e._v(" "),t("span",{pre:!0,attrs:{class:"token number"}},[e._v("777")]),e._v("-777\n"),t("span",{pre:!0,attrs:{class:"token assign-left variable"}},[e._v("NU_THEME_OFFICE_EMAIL")]),t("span",{pre:!0,attrs:{class:"token operator"}},[e._v("=")]),e._v("foo@example.org\n\n"),t("span",{pre:!0,attrs:{class:"token comment"}},[e._v("# If you are using Sentry, specifying the DSN with the same environment variable")]),e._v("\n"),t("span",{pre:!0,attrs:{class:"token comment"}},[e._v("# will initialize the browser SDK to capture client-side JS errors.")]),e._v("\n"),t("span",{pre:!0,attrs:{class:"token comment"}},[e._v("#")]),e._v("\n"),t("span",{pre:!0,attrs:{class:"token comment"}},[e._v("# This is NOT required and can be ignored if you do not use Sentry.")]),e._v("\n"),t("span",{pre:!0,attrs:{class:"token assign-left variable"}},[e._v("SENTRY_LARAVEL_DSN")]),t("span",{pre:!0,attrs:{class:"token operator"}},[e._v("=")]),e._v("\n")])])]),t("p",[e._v("The "),t("code",[e._v("resources/views/layout/_nav.blade.php")]),e._v(" view will be created in your project. This is intended for you to customize with nav items, login links, and user info.")]),e._v(" "),t("p",[e._v("If you are using Sentry, you should "),t("RouterLink",{attrs:{to:"/usage.html#sentry"}},[e._v("set up the tunneling route")]),e._v(" for the most reliable data captures from the browser SDK.")],1),e._v(" "),t("h3",{attrs:{id:"verifying-the-installation"}},[t("a",{staticClass:"header-anchor",attrs:{href:"#verifying-the-installation"}},[e._v("#")]),e._v(" Verifying the Installation")]),e._v(" "),t("p",[e._v("The package has a built-in demo view to showcase the layout & theme. The easiest way to see it is to add an entry to your "),t("code",[e._v("routes/web.php")]),e._v(" file:")]),e._v(" "),t("div",{staticClass:"language-php extra-class"},[t("pre",{pre:!0,attrs:{class:"language-php"}},[t("code",[t("span",{pre:!0,attrs:{class:"token class-name static-context"}},[e._v("Route")]),t("span",{pre:!0,attrs:{class:"token operator"}},[e._v("::")]),t("span",{pre:!0,attrs:{class:"token function"}},[e._v("get")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v("(")]),t("span",{pre:!0,attrs:{class:"token string single-quoted-string"}},[e._v("'/demo'")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(",")]),e._v(" "),t("span",{pre:!0,attrs:{class:"token keyword"}},[e._v("function")]),e._v(" "),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v("(")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(")")]),e._v(" "),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v("{")]),e._v("\n    "),t("span",{pre:!0,attrs:{class:"token keyword"}},[e._v("return")]),e._v(" "),t("span",{pre:!0,attrs:{class:"token function"}},[e._v("view")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v("(")]),t("span",{pre:!0,attrs:{class:"token string single-quoted-string"}},[e._v("'northwestern::demo-styles'")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(")")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(";")]),e._v("\n"),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v("}")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(")")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(";")]),e._v("\n")])])]),t("h2",{attrs:{id:"upgrading"}},[t("a",{staticClass:"header-anchor",attrs:{href:"#upgrading"}},[e._v("#")]),e._v(" Upgrading")]),e._v(" "),t("h3",{attrs:{id:"v3-0-0"}},[t("a",{staticClass:"header-anchor",attrs:{href:"#v3-0-0"}},[e._v("#")]),e._v(" v3.0.0")]),e._v(" "),t("p",[e._v("This version requires a higher version of the Sentry SDK and contains some breaking changes:")]),e._v(" "),t("p",[e._v("This release now requires the underlying "),t("a",{attrs:{href:"https://github.com/getsentry/sentry-php",target:"_blank",rel:"noopener noreferrer"}},[e._v("Sentry PHP SDK v4.0"),t("OutboundLink")],1),e._v(". Please refer to the PHP SDK "),t("a",{attrs:{href:"https://github.com/getsentry/sentry-php/blob/master/UPGRADE-4.0.md",target:"_blank",rel:"noopener noreferrer"}},[e._v("sentry-php/UPGRADE-4.0.md"),t("OutboundLink")],1),e._v(" guide for a complete list of breaking changes.")]),e._v(" "),t("ul",[t("li",[t("code",[e._v("@sentry/browser")]),e._v(" should be updated to a minimum version of "),t("code",[e._v("7.100.0")]),e._v(". Please refer to the "),t("a",{attrs:{href:"https://github.com/getsentry/sentry-javascript/blob/develop/MIGRATION.md",target:"_blank",rel:"noopener noreferrer"}},[e._v("migration guide"),t("OutboundLink")],1),e._v(" for a complete list of breaking changes.\n"),t("ul",[t("li",[e._v("If you are using the "),t("code",[e._v("resources/js/sentry.js")]),e._v(" file from this package, "),t("a",{attrs:{href:"https://github.com/NIT-Administrative-Systems/northwestern-laravel-ui/blob/033827623529e44239491e264c1c2f5b54c7075f/src/Presets/northwestern-stubs/js/sentry.js",target:"_blank",rel:"noopener noreferrer"}},[e._v("review the new version"),t("OutboundLink")],1),e._v(".")])])]),e._v(" "),t("li",[t("code",[e._v("@sentry/tracing")]),e._v(" is no longer required and can be removed from your project if it is not otherwise used.")])]),e._v(" "),t("h3",{attrs:{id:"v2-0-0"}},[t("a",{staticClass:"header-anchor",attrs:{href:"#v2-0-0"}},[e._v("#")]),e._v(" v2.0.0")]),e._v(" "),t("p",[e._v("This version drops support for Laravel Mix and Bootstrap 4. Laravel Vite and Bootstrap 5 are supported, and the layout has been adjusted accordingly.")]),e._v(" "),t("p",[e._v("There is an upgrade guide from "),t("a",{attrs:{href:"https://github.com/laravel/vite-plugin/blob/main/UPGRADE.md#migrating-from-laravel-mix-to-vite",target:"_blank",rel:"noopener noreferrer"}},[e._v("Laravel Mix"),t("OutboundLink")],1),e._v(" that should be reviewed if upgrading to this package. The "),t("a",{attrs:{href:"https://github.com/NIT-Administrative-Systems/northwestern-laravel-ui/tree/develop/src/Presets",target:"_blank",rel:"noopener noreferrer"}},[e._v("assets ejected into your "),t("code",[e._v("resources/")]),e._v(" folder"),t("OutboundLink")],1),e._v(" should be updated.")]),e._v(" "),t("p",[e._v("The "),t("a",{attrs:{href:"https://getbootstrap.com/docs/5.2/migration/",target:"_blank",rel:"noopener noreferrer"}},[e._v("Bootstrap 5 upgrade guide"),t("OutboundLink")],1),e._v(" should be reviewed. There are significant changes between Bootstrap v4 and v5.")]),e._v(" "),t("h3",{attrs:{id:"v1-9-0"}},[t("a",{staticClass:"header-anchor",attrs:{href:"#v1-9-0"}},[e._v("#")]),e._v(" v1.9.0")]),e._v(" "),t("p",[e._v("This version adds support for Laravel 10 and drops support for PHP 7.4 and 8.0. The minimum required version is PHP 8.1.")]),e._v(" "),t("p",[e._v("Some colours in the "),t("code",[e._v("_variables.scss")]),e._v(" have been updated to give better contrast.")]),e._v(" "),t("h3",{attrs:{id:"v1-8-0"}},[t("a",{staticClass:"header-anchor",attrs:{href:"#v1-8-0"}},[e._v("#")]),e._v(" v1.8.0")]),e._v(" "),t("p",[e._v("This release adds a middleware for providing more user context and allows you to send APM data to Sentry.")]),e._v(" "),t("p",[e._v("Review "),t("RouterLink",{attrs:{to:"/usage.html#sentry"}},[e._v("the section on Sentry")]),e._v(" to learn how to configure the new functionality.")],1),e._v(" "),t("p",[e._v("The "),t("code",[e._v("config/sentry.php")]),e._v(" file has been updated and has the following new options, which you should add to your config:")]),e._v(" "),t("div",{staticClass:"language-php extra-class"},[t("pre",{pre:!0,attrs:{class:"language-php"}},[t("code",[t("span",{pre:!0,attrs:{class:"token keyword"}},[e._v("return")]),e._v(" "),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v("[")]),e._v("\n    "),t("span",{pre:!0,attrs:{class:"token comment"}},[e._v("// . . . the existing options . . .")]),e._v("\n    \n    "),t("span",{pre:!0,attrs:{class:"token string single-quoted-string"}},[e._v("'sentry-enable-apm-js'")]),e._v(" "),t("span",{pre:!0,attrs:{class:"token operator"}},[e._v("=>")]),e._v(" "),t("span",{pre:!0,attrs:{class:"token function"}},[e._v("env")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v("(")]),t("span",{pre:!0,attrs:{class:"token string single-quoted-string"}},[e._v("'SENTRY_ENABLE_APM_FOR_JS'")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(",")]),e._v(" "),t("span",{pre:!0,attrs:{class:"token constant boolean"}},[e._v("true")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(")")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(",")]),e._v("\n    "),t("span",{pre:!0,attrs:{class:"token string single-quoted-string"}},[e._v("'sentry-traces-sample-rate'")]),e._v(" "),t("span",{pre:!0,attrs:{class:"token operator"}},[e._v("=>")]),e._v(" "),t("span",{pre:!0,attrs:{class:"token function"}},[e._v("env")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v("(")]),t("span",{pre:!0,attrs:{class:"token string single-quoted-string"}},[e._v("'SENTRY_TRACES_SAMPLE_RATE'")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(",")]),e._v(" "),t("span",{pre:!0,attrs:{class:"token number"}},[e._v("0.0")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(")")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(",")]),e._v("\n"),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v("]")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(";")]),e._v("\n")])])]),t("p",[e._v("The JS "),t("code",[e._v("@sentry/tracing")]),e._v(" package should be installed for tracing.")]),e._v(" "),t("h3",{attrs:{id:"v1-7-0"}},[t("a",{staticClass:"header-anchor",attrs:{href:"#v1-7-0"}},[e._v("#")]),e._v(" v1.7.0")]),e._v(" "),t("p",[e._v("This release adds a controller for Sentry's JavaScript browser SDK to tunnel through.")]),e._v(" "),t("p",[e._v("See "),t("RouterLink",{attrs:{to:"/usage.html#sentry"}},[e._v("the new section on Sentry")]),e._v(" for more information on using this feature.")],1),e._v(" "),t("h3",{attrs:{id:"v1-6-0"}},[t("a",{staticClass:"header-anchor",attrs:{href:"#v1-6-0"}},[e._v("#")]),e._v(" v1.6.0")]),e._v(" "),t("p",[e._v("This release fixes accessibility concerns")]),e._v(" "),t("p",[e._v("There are no breaking changes in this release.")]),e._v(" "),t("p",[e._v("To get these changes on existing apps add the following to the "),t("code",[e._v("sass/nu_purple_layout.scss")]),e._v(" in your app.")]),e._v(" "),t("div",{staticClass:"language-css extra-class"},[t("pre",{pre:!0,attrs:{class:"language-css"}},[t("code",[e._v("//This overrides bootstrap default ["),t("span",{pre:!0,attrs:{class:"token property"}},[e._v("color")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(":")]),e._v(" "),t("span",{pre:!0,attrs:{class:"token function"}},[e._v("hsla")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v("(")]),e._v("0"),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(",")]),e._v("0%"),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(",")]),e._v("100%"),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(",")]),e._v(".5"),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(")")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(";")]),e._v("] "),t("span",{pre:!0,attrs:{class:"token selector"}},[e._v("for accessibility reasons\n.navbar-dark .navbar-nav .nav-link")]),e._v(" "),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v("{")]),e._v("\n    "),t("span",{pre:!0,attrs:{class:"token property"}},[e._v("color")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(":")]),e._v(" "),t("span",{pre:!0,attrs:{class:"token function"}},[e._v("hsla")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v("(")]),e._v("0"),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(",")]),e._v("0%"),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(",")]),e._v("100%"),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(",")]),e._v(".6"),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(")")]),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(";")]),e._v("\n"),t("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v("}")]),e._v("\n")])])]),t("h3",{attrs:{id:"v1-5-0"}},[t("a",{staticClass:"header-anchor",attrs:{href:"#v1-5-0"}},[e._v("#")]),e._v(" v1.5.0")]),e._v(" "),t("p",[e._v("This release adds support for modifying the body tag.")]),e._v(" "),t("p",[e._v("There are no breaking changes.")]),e._v(" "),t("h3",{attrs:{id:"v1-4-0"}},[t("a",{staticClass:"header-anchor",attrs:{href:"#v1-4-0"}},[e._v("#")]),e._v(" v1.4.0")]),e._v(" "),t("p",[e._v("This release supports Laravel 8.")]),e._v(" "),t("p",[e._v("There are no breaking changes in this release.")]),e._v(" "),t("div",{staticClass:"custom-block tip"},[t("p",{staticClass:"custom-block-title"},[e._v("Laravel 8 Paginator")]),e._v(" "),t("p",[e._v("The framework changed the paginator to use TailwindCSS styles in Laravel 8.")]),e._v(" "),t("p",[e._v("If you are seeing very large angle brackets beneath your paginator, you need to "),t("a",{attrs:{href:"https://laravel.com/docs/8.x/upgrade#pagination-defaults",target:"_blank",rel:"noopener noreferrer"}},[e._v("add "),t("code",[e._v("Paginator::useBootstrap()")]),t("OutboundLink")],1),e._v(" to your "),t("code",[e._v("AppServiceProvider")]),e._v(".")])])])}),[],!1,null,null,null);t.default=r.exports}}]);