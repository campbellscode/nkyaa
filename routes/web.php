<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/meetings', function () {
    return view('meetings');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/houses', function () {
    return view('houses');
});

Route::get('/resources', function () {
    return view('resources');
});

Route::get('/literature', function () {
    return view('literature');
});

Route::get('/contact', function () {
    return view('contact');
});