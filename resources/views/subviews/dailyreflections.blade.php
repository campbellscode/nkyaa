<?php use App\Http\Controllers\DailyReflectionsController; ?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="{{ asset('css/master.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/dailyreflections.css') }}" rel="stylesheet">

        @section('title', 'Home')
    </head>       

    <body>
        @section('message_title')
            <h1>Daily Reflection!</h1>
            <p>{{ DailyReflectionsController::getDate() }}<br>
            {{ DailyReflectionsController::getTitle() }}<br>
            {{ DailyReflectionsController::getReading() }}</p>
        @stop
    </body>
</html>