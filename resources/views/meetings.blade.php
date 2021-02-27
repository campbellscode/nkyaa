@extends('layouts.navbar')

@section('title', 'Meetings')

@section('navbar')
    @parent
@stop

    @section('content')
    <div class="ml-5">

        <h1>Meetings Page!</h1>
</div>


<div class="row ml-5">
    @foreach ($meetings as $meeting)
        <div class="card" style="width: 18rem;">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
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