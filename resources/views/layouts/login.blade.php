<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Shams Library Dashboard')</title>

    <!-- CSS files -->
    <link href="{{ asset('dash/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dash/css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dash/css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dash/css/tabler-vendors.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dash/css/demo.min.css') }}" rel="stylesheet" />

    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>

</head>

<body>
    <script src="{{ asset('dash/js/demo-theme.min.js?1692870487') }}"></script>
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark">
                    <img src="{{ asset('main_logo.svg') }}" width="200" height="200" alt="shams" class="brand-image">
                </a>
            </div>

            @yield('forms')
        </div>
    </div>

    <!-- Libs JS -->

    <!-- Tabler Core -->

    <script src="{{ asset('dash/js/tabler.min.js?1692870487') }}"></script>
    <script src="{{ asset('dash/js/demo.min.js?1692870487') }}"></script>


</body>

</html>`