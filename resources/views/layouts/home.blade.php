<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" type="image/svg" href="{{ asset('favicon.svg') }}">

    <title>@yield('title', 'Shams Library Dashboard')</title>


    <!-- CSS files -->
    <link href="{{ asset('dash/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dash/css/tabler.css') }}" rel="stylesheet" />
    <link href="{{ asset('dash/css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dash/css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dash/css/tabler-vendors.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dash/css/demo.min.css') }}" rel="stylesheet" />

    <!-- 
    <link href="../../../public/dash/css/tabler.min.css?1692870487" rel="stylesheet"/>
    <link href="../../../public/dash/css/tabler-flags.min.css?1692870487" rel="stylesheet"/>
    <link href="../../../public/dash/css/tabler-payments.min.css?1692870487" rel="stylesheet"/>
    <link href="../../../public/dash/css/tabler-vendors.min.css?1692870487" rel="stylesheet"/>
    <link href="../../../public/dash/css/demo.min.css?1692870487" rel="stylesheet"/> -->
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
    <script src="{{ asset('dash/js/demo-theme.min.js') }}"></script>
    <div class="page">
        @include('includes.site_header')
        @yield('landing')
        <div class="page-wrapper">
            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <h2 class="page-title">
                                @yield('page header')
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-body">
                <div class="container-xl">

                    @yield('content')


                </div>
            </div>
                    @include('admin.includes.footer')
        </div>
    </div>

    <script src="{{ asset('dash/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('dash/js/demo.min.js') }}" defer></script>
    @include('admin.includes.core')

</body>

</html>