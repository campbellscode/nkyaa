<?php use App\Http\Controllers\DailyReflectionsController; ?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="{{ asset('css/master.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/meetings.css') }}" rel="stylesheet">

        @section('title', 'Home')
    </head>       

    <body>
        @section('message_title')
            <h1>Daily Reflection!</h1>
        @stop
    </body>
</html>