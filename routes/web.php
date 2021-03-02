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

Route::get('/meetings', 'MeetingsController@index', function () {
    return view('meetings');
});

// Meeting day filters.
Route::get('/meetings/filter/daily', 'MeetingsController@filterDaily', function () {
    return view('meetings');
});
Route::get('/meetings/filter/Monday', 'MeetingsController@filterMon', function () {
    return view('meetings');
});
Route::get('/meetings/filter/Tuesday', 'MeetingsController@filterTue', function () {
    return view('meetings');
});
Route::get('/meetings/filter/Wednesday', 'MeetingsController@filterWed', function () {
    return view('meetings');
});
Route::get('/meetings/filter/Thursday', 'MeetingsController@filterThu', function () {
    return view('meetings');
});
Route::get('/meetings/filter/Friday', 'MeetingsController@filterFri', function () {
    return view('meetings');
});
Route::get('/meetings/filter/Saturday', 'MeetingsController@filterSat', function () {
    return view('meetings');
});
Route::get('/meetings/filter/Sunday', 'MeetingsController@filterSun', function () {
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

Route::get('/requests', function () {
    return view('requests');
});

Route::get('/contact', function () {
    return view('contact');
});