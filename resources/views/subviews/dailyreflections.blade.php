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
            <!--<h1>Daily Reflection!</h1>-->
            <div class="text-black">
                <h4>{{ DailyReflectionsController::getDate() }}</h4>
                <h2>{{ DailyReflectionsController::getTitle() }}</h2>
                <h4>{{ DailyReflectionsController::getQuote() }}</h4>
                <h5>{{ DailyReflectionsController::getReading() }}</h5>
            </div>
        @stop
    </body>
</html>