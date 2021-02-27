@extends('layouts.navbar')

<head>
    <link href="{{ URL::asset('css/meetings.css') }}" rel="stylesheet">

    @section('title', 'Meetings')
</head>

    @section('navbar')
        @parent
    @stop



<body>


@section('content')
        <div class="pt-1 pb-1 pl-5 mb-2 white-bg">

            <h1>Meetings!</h1>
    </div>

    <div class="row ml-5">
        @foreach ($meetings as $meeting)
            <div class="card opacity-50 mr-1 mb-1" style="width: 18rem;">
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