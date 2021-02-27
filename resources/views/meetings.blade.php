@extends('layouts.navbar')

@section('title', 'Meetings')

@section('navbar')
    @parent
@stop

@section('content')
    <h1>Meetings Page!</h1>

    @foreach ($meetings as $meeting)
        <li>{{ $meeting->name }}</li>
        <li>{{ $meeting->type }}</li>
        <li>{{ $meeting->days }}</li>

        <li>{{ $meeting->time }}</li> 
        <li>{{ $meeting->address }}</li>
        <li>{{ $meeting->city }}</li>
        <li>{{ $meeting->state }}</li>
        <li>{{ $meeting->zip }}</li>
    @endforeach
@stop
