@extends('layouts.navbar')

@section('title', 'Home')

@section('navbar')
    @parent
@stop

@section('content')
    <div id="welcomebar">
        <div class="row pt-2 pl-5 white-bg">
            <div class="col-sm-12">
                <h1>Welcome!</h1>
            </div>
        </div>
        <div class="row pt-2 pl-5">
            <div class="col-sm-12">
                @include('subviews.dailyreflections')
                @yield('message_title')
            </div>
        </div>
    </div>
@stop


