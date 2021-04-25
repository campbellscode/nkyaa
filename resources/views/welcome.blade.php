@extends('layouts.navbar')

<?php 
    use App\Http\Controllers\DailyReflectionsController;     
    use App\Http\Controllers\ReadingsController;
?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @section('title', 'Welcome')

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/welcome.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/master.css') }}" rel="stylesheet">
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    </head>

    <body onload="set_initial_title()">
    @section('navbar')
        @parent
    @stop

    @section('content')
            <div id="welcomebar">
                <div class="row pt-2 pl-5 mainbar">
                    <div class="col-sm-12">
                        <h1>NKY AA Central Office</h1>
                        <div class="thin-hr mb-4"></div><br>
                        <div class="row">
                            <div class="col-sm-auto d-block">
                                <div id="btn-group-bar" class="btn-group" role="group" aria-label="Basic example">
                                <a onclick="load_daily_reflection()" class="btn btn-xs btn-starter pull-left">Daily Reflection</a><br>
                                <a onclick="load_preamble()" class="btn btn-xs btn-info pull-left">Preamble</a><br>
                                <a onclick="load_how_it_works()" class="btn btn-xs btn-info pull-left">How It Works</a><br>
                                <a onclick="load_steps()" class="btn btn-xs btn-info pull-left">12 Steps</a><br>
                                <a onclick="load_traditions()" class="btn btn-xs btn-info pull-left">12 Traditions</a><br>
                                <a onclick="load_promises()" class="btn btn-xs btn-info pull-left">Promises</a><br>
                                <a onclick="load_responsibility()" class="btn btn-xs btn-info pull-left">Responsibility</a><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            
            <div class="d-md-flex h-md-100">            
                <!-- First Half -->
                <div class="col-md-6 p-0 bg-white h-md-100 pt-2 pl-5">
                    <h1 id="mainTitle"></h1>
                    <div class="d-md-flex h-100 pl-5 pr-5">
                        <div id="welcome-left" class="pt-3">
                            @include('subviews.dailyreflections')
                        </div>
                    </div>
                </div>

                <!-- Second Half -->
                <div class="col-md-6 p-0 right-half h-md-100">
                    <h1></h1>
                    <div class="text-white d-md-flex align-items-center h-md-100 p-5 text-center justify-content-center">
                        <div class="pt-5 pb-5">
                            
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="row pt-2 pl-5 pr-5 white-bg">
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
            </div> -->               
        @stop
    </body>
</html>