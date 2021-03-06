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

    <style>
        body{
            background-color: white;
        }
    </style>
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
            <nav class="main_nav">
                <div class="container">
                    <div class="left_nav">
                        <a href="{{ route('home') }}"> <img src="{{ asset('img/logo.png') }}" alt="DC Logo"> </a>
                    </div>
                    <div class="middle_nav">
                        <ul>
                            <li><a href="#">CHARACTERS</a></li>
                            <li><a href="{{ route('comics') }}">COMICS</a></li>
                            <li><a href="#">MOVIES</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">GAMES</a></li>
                            <li><a href="#">VIDEOS</a></li>
                            <li><a href="#">NEWS</a></li>
                            <li><a href="#">SHOP</a></li>
                        </ul>
                    </div>
                    <div class="right_nav">
                        <input type="text" name="search" id="search" placeholder="Search">
                        <img src="{{ asset('img/search-icon-new.png') }}" alt="search">
                    </div>
                </div>
            </nav>
            <hr>
        </header>

        <main>
            @yield('content')
        </main>

        @include('layouts.partials.footer')
    </div>
</body>
</html>
