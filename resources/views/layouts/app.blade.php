<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keyword" content="@yield('meta_keyword')">
    <meta name="author" content="Yoru Manga">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        @if (!request()->routeIs('login') && !request()->routeIs('register'))
            @include('layouts.inc.frontend-navbar')
        @endif

        <main>
            @yield('content')
        </main>
        @include('layouts.inc.frontend-footer')
        <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script>
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            })
        </script>
    </div>
</body>

</html>
