@extends('layouts.navbar')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <!--<title>{{ config('app.name', 'Laravel') }}</title>-->
        <title>NKY AA - @yield('title')</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/master.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        @section('title', 'Home')

        @section('navbar')
            @parent
        @stop

        @section('content')
        <div id="welcomebar">
        <div class="row pt-2 pl-5 white-bg">
            <div class="col-lg-12">
                <h1>NKY AA Central Office</h1>
                <div class="thin-hr mb-4"></div>
            </div>
        </div>
        <div class="row pt-2 pl-5 pr-5 white-bg">
            <div class="col-xl-5">
            <h1>Daily Reflection</h1>
                <div class="bg-white opacity-3 rounded m-4 p-3">                        
                    @include('subviews.dailyreflections')
                    @yield('message_title')
                </div>
            </div>
            <div class="col-xl-7 pt-2">
                <h1>NKY AA Central Office</h1>
            </div>
        </div>        
        @stop
    </body>
</html>


