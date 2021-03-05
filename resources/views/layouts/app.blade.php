<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <nav class="nav_top d-flex justify-content-end">
                <a href="#" class="top_link first"> <img src="{{asset('img/DC_desktop_blue.svg')}}" alt="DC Logo"> </a>
                <a href="#" class="top_link"> <img src="{{asset('img/DCUI_desktop.svg')}}" alt="DC universe"> </a>
                <a href="#" class="top_link"> <img src="{{asset('img/DC_SHOP_desktop.svg')}}" alt="DC universe"> </a>
                <a href="#" class="top_link"> <img src="{{asset('img/DC_community.svg')}}" alt="DC universe"> </a>
                <a href="#" class="top_link"> <img src="{{asset('img/DC_on_HBOMAX_desktop.svg')}}" alt="DC universe"> </a>

            </nav>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
