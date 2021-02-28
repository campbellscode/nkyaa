@extends('layouts.navbar')

<?php use App\Http\Controllers\MeetingsController; ?>

<head>
    <link href="{{ URL::asset('css/meetings.css') }}" rel="stylesheet">

    @section('title', 'Meetings')
</head>

    @section('navbar')
        @parent
    @stop

<body>

@section('content')

    <div class="row pt-3 pl-5 mb-2 white-bg">
        <div class="col-sm-1">
            <a class="nav-link" href="/meetings"><h1>Meetings!</h1></a><br>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="/meetings/filter/daily" class="btn btn-xs btn-info pull-left">Daily</a><br>
                <a href="/meetings/filter/mon" class="btn btn-xs btn-info pull-left">Mon</a><br>
                <a href="/meetings/filter/tue" class="btn btn-xs btn-info pull-left">Tue</a><br>
                <a href="/meetings/filter/wed" class="btn btn-xs btn-info pull-left">Wed</a><br>
                <a href="/meetings/filter/thu" class="btn btn-xs btn-info pull-left">Thu</a><br>
                <a href="/meetings/filter/fri" class="btn btn-xs btn-info pull-left">Fri</a><br>
                <a href="/meetings/filter/sat" class="btn btn-xs btn-info pull-left">Sat</a><br>
                <a href="/meetings/filter/sun" class="btn btn-xs btn-info pull-left">Sun</a><br>
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