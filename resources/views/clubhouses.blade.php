@extends('layouts.navbar')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        @section('title', 'Clubhouses')

        <!-- Scripts 
        <script src="{{ asset('js/app.js') }}" defer></script> -->

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/master.css') }}" rel="stylesheet">
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    </head>
    
    <body>
        @section('navbar')
            @parent
        @stop

        @section('content')
            <div id="clubhousesbar">
                <div class="row pt-2 pl-5 mainbar">
                    <div class="col-lg-12">
                        <h1>Clubhouses</h1>
                        <div class="thin-hr mb-4"></div><br>
                    </div>
                </div>
            </div>
        @stop
    </body>
</html> 