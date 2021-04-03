<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <!--<title>{{ config('app.name', 'Laravel') }}</title>-->
        <title>NKY AA - @yield('title')</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/landing.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/master.css') }}" rel="stylesheet">
        <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
    </head>

    <body>
    <div class="slider">
            <div class="slide current">
                <div class="content">
                    <h1>Slide 1</h1>
                    <p>Out of the darkness</p>
                </div>
            </div>
            <div class="slide light-frame">
                <div class="content">
                    <h1>Slide 2</h1>
                    <p>Into the light</p>
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <h1>Slide 3</h1>
                    <p>Welcome to AA</p>
                </div>
            </div>
        </div>
        <div class="buttons">
            <button id="prev"><i class="fas fa-chevron-left"></i></button>
            <button id="next"><i class="fas fa-chevron-right"></i></button>
        </div> 
    </body>
</html>
