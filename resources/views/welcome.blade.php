@extends('layouts.navbar')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @section('title', 'Welcome')

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/master.css') }}" rel="stylesheet">
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    </head>
    
    @section('navbar')
        @parent
    @stop

    <body>
    @section('content')
            <div id="welcomebar">
                <div class="row pt-2 pl-5 mainbar">
                    <div class="col-sm-12">
                        <h1>NKY AA Central Office</h1>
                        <div class="thin-hr mb-4"></div><br>
                        <div class="row">
                            <div class="col-sm-auto d-block">
                                <div id="btn-group-bar" class="btn-group" role="group" aria-label="Basic example">
                                <a href="/meetings" class="btn btn-xs btn-starter pull-left">Daily Reflection</a><br>
                                <a href="/meetings/filter/daily" class="btn btn-xs btn-info pull-left">Preamble</a><br>
                                <a href="/meetings/filter/Monday" class="btn btn-xs btn-info pull-left">How It Works</a><br>
                                <a href="/meetings/filter/Tuesday" class="btn btn-xs btn-info pull-left">12 Steps</a><br>
                                <a href="/meetings/filter/Wednesday" class="btn btn-xs btn-info pull-left">12 Traditions</a><br>
                                <a href="/meetings/filter/Friday" class="btn btn-xs btn-info pull-left">Bill's Story</a><br>
                                <a href="/meetings/filter/Saturday" class="btn btn-xs btn-info pull-left">Dr. Bob's Nm</a><br>
                                <a href="/meetings/filter/Thursday" class="btn btn-xs btn-info pull-left">Responsibility</a><br>
                                </div>
                            </div>
                            <!--<div class="col-sm-auto d-none d-md-block">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="/meetings/filter/daily" class="btn btn-xs btn-info pull-right">In-Person</a><br>
                                    <a href="/meetings/filter/mon" class="btn btn-xs btn-info pull-left">Online</a><br>
                                </div>            
                            </div>
                            <div class="col-sm-auto d-none d-lg-none d-xl-block">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="/meetings/filter/mon" class="btn btn-xs btn-info pull-left">Beginner</a><br>
                                    <a href="/meetings/filter/daily" class="btn btn-xs btn-info pull-right">Discussion</a><br>
                                    <a href="/meetings/filter/mon" class="btn btn-xs btn-info pull-left">Ticket</a><br>
                                    <a href="/meetings/filter/daily" class="btn btn-xs btn-info pull-right">Big Book</a><br>
                                    <a href="/meetings/filter/mon" class="btn btn-xs btn-info pull-left">12 & 12</a><br>
                                    <a href="/meetings/filter/daily" class="btn btn-xs btn-info pull-right">Speaker</a><br>
                                </div>            
                            </div>-->
                        </div>
                    </div>
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