<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($page_title) ? $page_title : config('app.name') }} - Northwestern University</title>
    @vite(['resources/sass/app.scss'])
    <link href="https://common.northwestern.edu/v8/icons/favicon-16.png" rel="icon" sizes="16x16" type="image/png">
    <link href="https://common.northwestern.edu/v8/icons/favicon-32.png" rel="icon" sizes="32x32" type="image/png">

    @if ($livewire['enabled'])
        @if(!$livewire['inject_assets'])
            @livewireStyles()
        @endif
    @endif
  </head>
  <body class="{{ isset($bodyClasses) ? $bodyClasses : 'd-flex flex-column min-vh-100' }}" {!! isset($bodyAttributes) ? $bodyAttributes : '' !!}>

    <div class="flex-grow-1" id="app">
        @include('northwestern::global-alert')

        <nav class="navbar navbar-inverse bg-dark-purple" aria-label="Logo">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img
                        src="{{ isset($navbar_custom_lockup_url) ? $navbar_custom_lockup_url : config('northwestern-theme.lockup') }}"
                        alt='{{ isset($navbar_custom_lockup_alt) ? $navbar_custom_lockup_alt : config('app.name') }}'
                    >
                </a>

                @if (config('app.env') !== 'production')
                <span class="badge bg-warning text-black d-none d-sm-inline" style="font-size: large;">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Environment: {{ config('app.env') }}
                    @includeIf('db-schema-display')
                </span>

                {{-- Need to format a bit differently for small screens, or it looks un-designed --}}
                <span class="badge bg-warning text-black d-inline d-sm-none mx-auto my-2" style="font-size: large;">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Environment: {{ config('app.env') }}
                    @includeIf('db-schema-display')
                </span>
                @endif
            </div>
        </nav>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary" aria-label="Navbar">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    @include('layout._nav')
                </div>
            </div>
        </nav>

        <main role="main">
            @yield('container')
        </main>
    </div>

    <footer class="container-fluid d-print-none">
      <div class="row justify-content-center">
        <div class="col-md-4 col-lg-3">
            <a href='https://northwestern.edu'>
                <img src='https://common.northwestern.edu/v8/css/images/northwestern-university.svg' alt='Northwestern University' class='nu-branding'>
            </a>
            <ul class="list-unstyled">
                <li>&copy; {{ date('Y') }} Northwestern University</li>
                <li><a href='https://www.northwestern.edu/contact.html'>Contact Northwestern University</a></li>
                <li><a href='https://www.northwestern.edu/hr/careers/'>Careers</a></li>
                <li><a href='https://www.northwestern.edu/disclaimer.html'>Disclaimer</a></li>
                <li><a href='https://www.northwestern.edu/emergency/index.html'>Campus Emergency Information</a></li>
                <li><a href='https://policies.northwestern.edu/'>University Policies</a></li>
                <li><a href='https://www.northwestern.edu/accessibility/about/report-accessibility-issue.html'>Report an Accessibility Issue</a></li>
            </ul>
        </div>
        <div class="col-md-4 col-lg-3">
            <dl class="d-flex justify-content-start">
                <dt class="address-pin"><span class="sr-only">Office Address</span></dt>
                <dd>
                    <address>
                        <ul class="list-unstyled">
                            <li><strong>{{ config('northwestern-theme.office.name') }}</strong></li>
                            <li>{{ config('northwestern-theme.office.addr') }}</li>
                            <li class="pb-0">{{ config('northwestern-theme.office.city') }}</li>
                        </ul>
                    </address>
                </dd>
            </dl>

            <dl class="d-flex justify-content-start pb-2">
                <dt class="phone-pin"><span class="sr-only">Phone Number</span></dt>
                <dd class="mb-0">{{ config('northwestern-theme.office.phone') }}</dd>
            </dl>

            <dl class="d-flex justify-content-start pb-2">
                <dt class="email-pin"><span class="sr-only">Email Address</span></dt>
                <dd class="mb-0"><a href='mailto:{{ config('northwestern-theme.office.email') }}'>{{ config('northwestern-theme.office.email') }}</a></dd>
            </dl>
        </div>
        <div class="col-md-2">
            <p>Social Media</p>
            <a href='https://www.facebook.com/NorthwesternU' class='social facebook'>Facebook</a>
            <a href='https://instagram.com/northwesternu' class='social instagram'>Instagram</a>
            <a href='https://www.youtube.com/user/NorthwesternU' class='social youtube'>YouTube</a>
        </div>
      </div>

    </footer>

    @if ($livewire['enabled'])
        @if(version_compare($livewire['version'], '3.0.0', '<'))
            @livewireScripts()
        @elseif(!$livewire['inject_assets'])
            @livewireScriptConfig
        @endif
    @endif

    @vite(['resources/js/app.js'])

    @isset($sentry_config['dsn'])
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            @isset($sentry_user_context)
                Sentry.setUser(@json($sentry_user_context));
            @endisset

            const sentryConfig = @json($sentry_config);

            @if($sentry_config['enable_apm'])
                sentryConfig.integrations.push(Sentry.browserTracingIntegration())
            @endif

            Sentry.init(sentryConfig);
        });
    </script>
    @endisset

    @stack('scripts')
  </body>
</html>
