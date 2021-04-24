@extends('layouts.navbar')

<?php use App\Http\Controllers\HousesController; ?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @section('title', 'Sober Living')

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/master.css') }}" rel="stylesheet">
        <link href="{{ asset('css/houses.css') }}" rel="stylesheet">
    </head>
        
    @section('navbar')
        @parent
    @stop

    <body>
        @section('content')
        <div id="housesbar">
            <div class="row pt-2 pl-5 mainbar">
                <div class="col-sm-12">
                    <h1>Sober Living! - {{ $house_filter }}</h1>
                    <div class="thin-hr mb-4"></div><br>
                    <div class="row">
                        <div class="col-sm-auto d-block">
                            <div id="btn-group-bar" class="btn-group" role="group" aria-label="Basic example">
                                <a href="/houses" class="btn btn-xs btn-starter pull-left">All</a><br>
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
                        <ul class="fa-ul card-text">
                        @if($house->type == 0)
                                <li><i class="fas fa-male fa-fw" aria-hidden="true"></i>&nbsp; Men's</li>
                            @elseif($house->type == 1)
                            <li><i class="fas fa-female fa-fw" aria-hidden="true"></i>&nbsp; Women's</li>
                            @endif                            
                            @if($house->state == 0)
                                <li><i class="fas fa-map-marker-alt fa-fw" aria-hidden="true"></i>&nbsp; {{ $house->city }}, KY</li>
                            @elseif($house->state == 1)
                                <li><i class="fas fa-map-marker-alt fa-fw" aria-hidden="true"></i>&nbsp; {{ $house->city }}, OH</li>
                            @endif           
                            <li><i class="fas fa-phone fa-fw" aria-hidden="true"></i>&nbsp; {{ $house->phone }}</li>               
                            @if($house->busline == 0)
                                <li><i class="fas fa-bus fa-fw" aria-hidden="true"></i>&nbsp; Busline - No</li>
                            @elseif($house->busline == 1)
                                <li><i class="fas fa-bus fa-fw" aria-hidden="true"></i>&nbsp; Busline - Yes</li>
                            @endif   
                            @if($house->mat == 0)
                                <li><i class="fas fa-pills fa-fw" aria-hidden="true"></i>&nbsp; MAT - No</li>
                            @elseif($house->mat == 1)
                                <li><i class="fas fa-pills fa-fw" aria-hidden="true"></i>&nbsp; MAT - Yes</li>                        
                            @endif                          
                        </ul>
                        <a href="#" class="show-button btn btn-primary">Directions</a>
                    </div>
                </div>
            @endforeach
        </div>
        @stop     
    </body>
</html>