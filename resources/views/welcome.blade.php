@extends('layouts.navbar')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

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
                <div class="col-lg-12">
                    <h1>NKY AA Central Office</h1>
                    <div class="thin-hr mb-4"></div><br>
                    
                    <!-- Visible only on xl screens -->
                    <div id="btn-group-xl" class="row">
                        <div class="col-12">
                            <div class="btn-group btn-group-justified flex-wrap" role="group" aria-label="Basic example">
                                <a href="/meetings" class="btn btn-xs btn-starter pull-left">Daily Reflection</a><br>
                                <a href="/meetings/filter/daily" class="btn btn-xs btn-info pull-left">Preamble</a><br>
                                <a href="/meetings/filter/Monday" class="btn btn-xs btn-info pull-left">How It Works</a><br>
                                <a href="/meetings/filter/Tuesday" class="btn btn-xs btn-info pull-left">12 Steps</a><br>
                                <a href="/meetings/filter/Wednesday" class="btn btn-xs btn-info pull-left">12 Traditions</a><br>
                                <a href="/meetings/filter/Friday" class="btn btn-xs btn-info pull-left">Bill's Story</a><br>
                                <a href="/meetings/filter/Saturday" class="btn btn-xs btn-info pull-left">Dr. Bob's Nightmare</a><br>
                                <a href="/meetings/filter/Thursday" class="btn btn-xs btn-info pull-left">Responsibility</a><br>
                            </div>
                        </div>
                    </div>

                    <!-- Visible only on lg and md screens -->
                    <div id="btn-group-lg-md" class="row">
                        <div class="col-6">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="/meetings" class="btn btn-xs btn-starter pull-left">Daily Reflection</a><br>
                                <a href="/meetings/filter/daily" class="btn btn-xs btn-info pull-left">Preamble</a><br>
                                <a href="/meetings/filter/Monday" class="btn btn-xs btn-info pull-left">How It Works</a><br>
                                <a href="/meetings/filter/Tuesday" class="btn btn-xs btn-info pull-left">12 Steps</a><br>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="/meetings/filter/Monday" style="border-radius:0;" class="btn btn-xs btn-info pull-left">12 Traditions</a><br>
                                <a href="/meetings/filter/Friday" class="btn btn-xs btn-info pull-left">Bill's Story</a><br>
                                <a href="/meetings/filter/Saturday" class="btn btn-xs btn-info pull-left">Dr. Bob's Nightmare</a><br>
                                <a href="/meetings/filter/Thursday" class="btn btn-xs btn-info pull-left">Responsibility</a><br>
                            </div>
                        </div>
                    </div>

                    <!-- Visible only on sm and xs screens -->
                    <div id="btn-group-sm-xs" class="row">
                        <div class="col-2">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="/meetings" class="btn btn-xs btn-starter pull-left">Daily Reflection</a><br>
                                <a href="/meetings/filter/daily" class="btn btn-xs btn-info pull-left">Preamble</a><br>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="/meetings/filter/Monday" style="border-radius:0;" class="btn btn-xs btn-info pull-left">How It Works</a><br>
                                <a href="/meetings/filter/Tuesday" class="btn btn-xs btn-info pull-left">12 Steps</a><br>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="/meetings/filter/Monday" style="border-radius:0;" class="btn btn-xs btn-info pull-left">12 Traditions</a><br>
                                <a href="/meetings/filter/Friday" class="btn btn-xs btn-info pull-left">Bill's Story</a><br>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="/meetings/filter/Saturday" style="border-radius:0;" class="btn btn-xs btn-info pull-left">Dr. Bob's Nightmare</a><br>
                                <a href="/meetings/filter/Thursday" class="btn btn-xs btn-info pull-left">Responsibility</a><br>
                            </div>
                        </div>
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