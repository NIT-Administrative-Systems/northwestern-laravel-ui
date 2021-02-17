(window.webpackJsonp=window.webpackJsonp||[]).push([[7],{310:function(e,t,a){e.exports=a.p+"assets/img/container-layout.36a0206d.png"},367:function(e,t,a){"use strict";a.r(t);var s=a(42),r=Object(s.a)({},(function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("ContentSlotsDistributor",{attrs:{"slot-key":e.$parent.slotKey}},[s("h1",{attrs:{id:"northwestern-bootstrap-preset-for-laravel"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#northwestern-bootstrap-preset-for-laravel"}},[e._v("#")]),e._v(" Northwestern Bootstrap Preset for Laravel")]),e._v(" "),s("p",[e._v("Adds a Northwestern Bootstrap theme into your Laravel application.")]),e._v(" "),s("p",[e._v("The Sentry browser SDK (for reporting on JS errors) will be automatically configured if you are using Sentry in the Laravel app.")]),e._v(" "),s("p",[e._v("This depends on the "),s("code",[e._v("laravel/ui")]),e._v(" package. It is mutually exclusive with Laravel Breeze/Jetstream, as those no longer use Bootstrap.")]),e._v(" "),s("h2",{attrs:{id:"overview"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#overview"}},[e._v("#")]),e._v(" Overview")]),e._v(" "),s("p",[e._v("The package modifies the default Bootstrap settings to be more purple, loads the Northwestern fonts, adds "),s("a",{attrs:{href:"https://fontawesome.com/icons?d=gallery&m=free",target:"_blank",rel:"noopener noreferrer"}},[e._v("Font Awesome icons"),s("OutboundLink")],1),e._v(", and gives you a responsive ready-made site layout.")]),e._v(" "),s("p",[s("img",{attrs:{src:a(310),alt:"Purple container layout"}})]),e._v(" "),s("p",[e._v("For the most part, the purple-ization is rolled out across all Bootstrap components and you will not need to do anything special to take advantage of it.")]),e._v(" "),s("p",[e._v("In order to use this package, you must:")]),e._v(" "),s("ul",[s("li",[e._v("Be on Laravel 7+")]),e._v(" "),s("li",[e._v("Use Yarn to manage your JS/CSS dependencies")]),e._v(" "),s("li",[e._v("Use "),s("a",{attrs:{href:"https://laravel.com/docs/7.x/mix",target:"_blank",rel:"noopener noreferrer"}},[e._v("Laravel Mix"),s("OutboundLink")],1),e._v(" to bundle your assets")])]),e._v(" "),s("h2",{attrs:{id:"installation"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#installation"}},[e._v("#")]),e._v(" Installation")]),e._v(" "),s("p",[e._v("Install the package via composer, and then swap to the Northwestern preset. This works like the "),s("a",{attrs:{href:"https://laravel.com/docs/7.x/frontend",target:"_blank",rel:"noopener noreferrer"}},[e._v("standard Laravel UI presets"),s("OutboundLink")],1),e._v(".")]),e._v(" "),s("div",{staticClass:"custom-block danger"},[s("p",{staticClass:"custom-block-title"},[e._v("Overwrites Files")]),e._v(" "),s("p",[e._v("Changing your UI preset will overwrite some files in "),s("code",[e._v("resources/scss")]),e._v(", "),s("code",[e._v("resources/views")]),e._v(", and "),s("code",[e._v("resources/js")]),e._v(".")]),e._v(" "),s("p",[e._v("If you are adding this to an existing app, make sure you have a backup of your project before changing the preset.")])]),e._v(" "),s("p",[e._v("The installation process is:")]),e._v(" "),s("div",{staticClass:"language-sh extra-class"},[s("pre",{pre:!0,attrs:{class:"language-sh"}},[s("code",[s("span",{pre:!0,attrs:{class:"token function"}},[e._v("composer")]),e._v(" require northwestern-sysdev/northwestern-laravel-ui\nphp artisan vendor:publish --provider"),s("span",{pre:!0,attrs:{class:"token operator"}},[e._v("=")]),s("span",{pre:!0,attrs:{class:"token string"}},[e._v('"Northwestern\\SysDev\\UI\\Providers\\NorthwesternUiServiceProvider"')]),e._v("\n\nphp artisan ui northwestern "),s("span",{pre:!0,attrs:{class:"token comment"}},[e._v("# you can add --auth if you need the register/login stuff")]),e._v("\n")])])]),s("p",[e._v("You should review the "),s("code",[e._v("config/northwestern-theme.php")]),e._v(" config file and adjust the default values. Alternatively, you may set them all as environment variables:")]),e._v(" "),s("div",{staticClass:"language-bash extra-class"},[s("pre",{pre:!0,attrs:{class:"language-bash"}},[s("code",[s("span",{pre:!0,attrs:{class:"token comment"}},[e._v("# Lockup image used in the header")]),e._v("\n"),s("span",{pre:!0,attrs:{class:"token comment"}},[e._v("# Should be either a full URL (http://...) or a file in your public folder (images/lockup.png)")]),e._v("\n"),s("span",{pre:!0,attrs:{class:"token assign-left variable"}},[e._v("NU_THEME_LOCKUP")]),s("span",{pre:!0,attrs:{class:"token operator"}},[e._v("=")]),e._v("https://common.northwestern.edu/v8/css/images/northwestern.svg\n\n"),s("span",{pre:!0,attrs:{class:"token comment"}},[e._v("# Office & contact info used in the footer")]),e._v("\n"),s("span",{pre:!0,attrs:{class:"token assign-left variable"}},[e._v("NU_THEME_OFFICE_NAME")]),s("span",{pre:!0,attrs:{class:"token operator"}},[e._v("=")]),e._v("Information Technology\n"),s("span",{pre:!0,attrs:{class:"token assign-left variable"}},[e._v("NU_THEME_OFFICE_ADDR")]),s("span",{pre:!0,attrs:{class:"token operator"}},[e._v("=")]),s("span",{pre:!0,attrs:{class:"token number"}},[e._v("1800")]),e._v(" Sherman Ave\n"),s("span",{pre:!0,attrs:{class:"token assign-left variable"}},[e._v("NU_THEME_OFFICE_CITY")]),s("span",{pre:!0,attrs:{class:"token operator"}},[e._v("=")]),e._v("Evanston, IL "),s("span",{pre:!0,attrs:{class:"token number"}},[e._v("60201")]),e._v("\n"),s("span",{pre:!0,attrs:{class:"token assign-left variable"}},[e._v("NU_THEME_OFFICE_PHONE")]),s("span",{pre:!0,attrs:{class:"token operator"}},[e._v("=")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v("(")]),s("span",{pre:!0,attrs:{class:"token number"}},[e._v("777")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(")")]),e._v(" "),s("span",{pre:!0,attrs:{class:"token number"}},[e._v("777")]),e._v("-777\n"),s("span",{pre:!0,attrs:{class:"token assign-left variable"}},[e._v("NU_THEME_OFFICE_EMAIL")]),s("span",{pre:!0,attrs:{class:"token operator"}},[e._v("=")]),e._v("foo@example.org\n\n"),s("span",{pre:!0,attrs:{class:"token comment"}},[e._v("# If you are using Sentry, specifying the DSN with the same environment variable")]),e._v("\n"),s("span",{pre:!0,attrs:{class:"token comment"}},[e._v("# will initialize the browser SDK to capture client-side JS errors.")]),e._v("\n"),s("span",{pre:!0,attrs:{class:"token comment"}},[e._v("#")]),e._v("\n"),s("span",{pre:!0,attrs:{class:"token comment"}},[e._v("# This is NOT required and can be ignored if you do not use Sentry.")]),e._v("\n"),s("span",{pre:!0,attrs:{class:"token assign-left variable"}},[e._v("SENTRY_LARAVEL_DSN")]),s("span",{pre:!0,attrs:{class:"token operator"}},[e._v("=")]),e._v("\n")])])]),s("p",[e._v("The "),s("code",[e._v("resources/views/layout/_nav.blade.php")]),e._v(" view will be created in your project. This is intended for you to customize with nav items, login links, and user info.")]),e._v(" "),s("h3",{attrs:{id:"verifying-the-installation"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#verifying-the-installation"}},[e._v("#")]),e._v(" Verifying the Installation")]),e._v(" "),s("p",[e._v("The package has a built-in demo view to showcase the layout & theme. The easiest way to see it is to add an entry to your "),s("code",[e._v("routes/web.php")]),e._v(" file:")]),e._v(" "),s("div",{staticClass:"language-php extra-class"},[s("pre",{pre:!0,attrs:{class:"language-php"}},[s("code",[s("span",{pre:!0,attrs:{class:"token class-name static-context"}},[e._v("Route")]),s("span",{pre:!0,attrs:{class:"token operator"}},[e._v("::")]),s("span",{pre:!0,attrs:{class:"token function"}},[e._v("get")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v("(")]),s("span",{pre:!0,attrs:{class:"token string single-quoted-string"}},[e._v("'/demo'")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(",")]),e._v(" "),s("span",{pre:!0,attrs:{class:"token keyword"}},[e._v("function")]),e._v(" "),s("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v("(")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(")")]),e._v(" "),s("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v("{")]),e._v("\n    "),s("span",{pre:!0,attrs:{class:"token keyword"}},[e._v("return")]),e._v(" "),s("span",{pre:!0,attrs:{class:"token function"}},[e._v("view")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v("(")]),s("span",{pre:!0,attrs:{class:"token string single-quoted-string"}},[e._v("'northwestern::demo-styles'")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(")")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(";")]),e._v("\n"),s("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v("}")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(")")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[e._v(";")]),e._v("\n")])])]),s("h2",{attrs:{id:"upgrading"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#upgrading"}},[e._v("#")]),e._v(" Upgrading")]),e._v(" "),s("h3",{attrs:{id:"v1-3-0"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#v1-3-0"}},[e._v("#")]),e._v(" v1.3.0")]),e._v(" "),s("p",[e._v("This release supports Laravel 8.")]),e._v(" "),s("p",[e._v("There are no breaking changes in this release.")]),e._v(" "),s("div",{staticClass:"custom-block tip"},[s("p",{staticClass:"custom-block-title"},[e._v("Laravel 8 Paginator")]),e._v(" "),s("p",[e._v("The framework changed the paginator to use TailwindCSS styles in Laravel 8.")]),e._v(" "),s("p",[e._v("If you are seeing very large angle brackets beneath your paginator, you need to "),s("a",{attrs:{href:"https://laravel.com/docs/8.x/upgrade#pagination-defaults",target:"_blank",rel:"noopener noreferrer"}},[e._v("add "),s("code",[e._v("Paginator::useBootstrap()")]),s("OutboundLink")],1),e._v(" to your "),s("code",[e._v("AppServiceProvider")]),e._v(".")])])])}),[],!1,null,null,null);t.default=r.exports}}]);