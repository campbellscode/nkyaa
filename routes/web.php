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
Route::get('/meetings/filter/mon', 'MeetingsController@filterMon', function () {
    return view('meetings');
});
Route::get('/meetings/filter/tue', 'MeetingsController@filterTue', function () {
    return view('meetings');
});
Route::get('/meetings/filter/wed', 'MeetingsController@filterWed', function () {
    return view('meetings');
});
Route::get('/meetings/filter/thu', 'MeetingsController@filterThu', function () {
    return view('meetings');
});
Route::get('/meetings/filter/fri', 'MeetingsController@filterFri', function () {
    return view('meetings');
});
Route::get('/meetings/filter/sat', 'MeetingsController@filterSat', function () {
    return view('meetings');
});
Route::get('/meetings/filter/sun', 'MeetingsController@filterSun', function () {
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