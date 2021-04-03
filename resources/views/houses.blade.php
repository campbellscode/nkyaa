@extends('layouts.navbar')

<?php use App\Http\Controllers\HousesController; ?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="{{ asset('css/master.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/meetings.css') }}" rel="stylesheet">

        @section('title', 'Sober Living')
    </head>
        
        @section('navbar')
            @parent
        @stop

    <body>

    @section('content')
    <div id="meetingsbar">
        <div class="row pt-2 pl-5 white-bg">
            <div class="col-sm-12">
                <h1>Sober Living! - {{ $house_filter }}</h1><br>
                <div class="row">
                    <div class="col-sm-auto d-block">
                        <div id="elem" class="btn-group" role="group" aria-label="Basic example">
                            <a id="elem" href="/houses" class="btn btn-xs btn-info pull-left">All</a><br>
                            <a href="/houses/filter/mens" class="btn btn-xs btn-info pull-left">Men's</a><br>
                            <a href="/houses/filter/womens" class="btn btn-xs btn-info pull-left">Women's</a><br>
                            <a href="/houses/filter/ky" class="btn btn-xs btn-info pull-left">KY</a><br>
                            <a href="/houses/filter/oh" class="btn btn-xs btn-info pull-left">OH</a><br>
                            <a href="/houses/filter/busline" class="btn btn-xs btn-info pull-left">Busline</a><br>
                            <a href="/houses/filter/mat" class="btn btn-xs btn-info pull-left">MAT</a><br>
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

            <!-- Checkboxes
            First argument : name
            Second argument : value
            Third argument : checked or not checked this takes: true or false
            Fourth argument : additional attributes (e.g., checkbox css classe) -->

        <div class="row ml-5">
            @foreach ($houses as $house)
                <div class="card opacity-85 mr-3 mb-3" style="width: 18rem;">
                    <!-- <img class="card-img-top" src="{{url('/images/holding-hands.jpg')}}" alt="Card image cap"> -->
                    <div class="card-body card-shadow">
                        <h5 class="card-title">{{ $house->name }}</h5>
                        <p class="card-text">
                        @if($house->type == 0)
                                <li>Men's</li>
                            @elseif($house->type == 1)
                                <li>Women's</li>
                            @endif                            
                            <li>{{ $house->city }}</li>
                            @if($house->state == 0)
                                <li>KY</li>
                            @elseif($house->state == 1)
                                <li>OH</li>
                            @endif                              
                            <li>{{ $house->phone }}</li>
                            @if($house->busline == 0)
                                <li>Busline: No</li>
                            @elseif($house->busline == 1)
                                <li>Busline: Yes</li>
                            @endif   
                            @if($house->mat == 0)
                                <li>Accepts MAT: No</li>
                            @elseif($house->mat == 1)
                                <li>Accepts MAT: Yes</li>
                            @endif                          
                        </p>
                        <a href="#" class="show-button btn btn-primary">Directions</a>
                    </div>
                </div>
            @endforeach
        </div>
        @stop     
    </body>
</html>