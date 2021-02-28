@extends('layouts.navbar')

<?php use App\Http\Controllers\MeetingsController; ?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="{{ asset('css/master.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/meetings.css') }}" rel="stylesheet">

        @section('title', 'Meetings')
    </head>
        
        @section('navbar')
            @parent
        @stop

    <body>

    @section('content')
    <div id="meetingsbar">
        <div class="row pt-auto pl-5 white-bg">
            <div class="col-sm-12">
                <a class="nav-link" href="/meetings"><h1>Meetings!</h1></a><br>
                <div class="row">
                    <div class="col-sm-auto d-block">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="/meetings/filter/daily" class="k-button btn btn-xs btn-info pull-left">Daily</a><br>
                            <a href="/meetings/filter/mon" class="k-button btn btn-xs btn-info pull-left">Mon</a><br>
                            <a href="/meetings/filter/tue" class="k-button btn btn-xs btn-info pull-left">Tue</a><br>
                            <a href="/meetings/filter/wed" class="k-button btn btn-xs btn-info pull-left">Wed</a><br>
                            <a href="/meetings/filter/thu" class="k-button btn btn-xs btn-info pull-left">Thu</a><br>
                            <a href="/meetings/filter/fri" class="k-button btn btn-xs btn-info pull-left">Fri</a><br>
                            <a href="/meetings/filter/sat" class="k-button btn btn-xs btn-info pull-left">Sat</a><br>
                            <a href="/meetings/filter/sun" class="k-button btn btn-xs btn-info pull-left">Sun</a><br>
                        </div>
                    </div>
                    <div class="col-sm-auto d-none d-md-block">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="/meetings/filter/daily" class="k-button btn btn-xs btn-info pull-right">In-Person</a><br>
                            <a href="/meetings/filter/mon" class="k-button btn btn-xs btn-info pull-left">Online</a><br>
                        </div>            
                    </div>
                    <div class="col-sm-auto d-none d-lg-none d-xl-block">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="/meetings/filter/mon" class="k-button btn btn-xs btn-info pull-left">Beginner</a><br>
                            <a href="/meetings/filter/daily" class="k-button btn btn-xs btn-info pull-right">Discussion</a><br>
                            <a href="/meetings/filter/mon" class="k-button btn btn-xs btn-info pull-left">Ticket</a><br>
                            <a href="/meetings/filter/daily" class="k-button btn btn-xs btn-info pull-right">Big Book</a><br>
                            <a href="/meetings/filter/mon" class="k-button btn btn-xs btn-info pull-left">12 & 12</a><br>
                            <a href="/meetings/filter/daily" class="k-button btn btn-xs btn-info pull-right">Speaker</a><br>
                        </div>            
                    </div>
                </div>
            </div>
        </div>
    </div>



            <!-- Checkboxes
            First argument : name
            Second argument : value
            Third argument : checked or not checked this takes: true or false
            Fourth argument : additional attributes (e.g., checkbox css classe) -->

        



        <div class="row ml-5">
            @foreach ($meetings as $meeting)
                <div class="card opacity-85 mr-1 mb-1" style="width: 18rem;">
                    <!-- <img class="card-img-top" src="{{url('/images/holding-hands.jpg')}}" alt="Card image cap"> -->
                    <div class="card-body">
                        <h5 class="card-title">{{ $meeting->name }}</h5>
                        <p class="card-text">
                            <li>{{ $meeting->type }}</li>
                            <li>{{ $meeting->days }}</li>
                            <li>{{ $meeting->time }}</li> 
                            <li>{{ $meeting->address }}</li>
                            <li>{{ $meeting->city }}</li>
                            <li>{{ $meeting->state }}</li>
                            <li>{{ $meeting->zip }}</li>                
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @endforeach
        </div>
        @stop
    </body>
</html>