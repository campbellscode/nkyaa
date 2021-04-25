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
    return view('landing');
});

// Load daily reflection automatically on welcome sceen.
Route::get('/welcome', 'ReadingsController@loadDailyRef', function () {
    return view('welcome');
});

// Welcome screen button routes.
Route::get('/welcome/dailyreflection', function () {
    return view('subviews.dailyreflections');
});
Route::get('/welcome/preamble', function () {
    return view('subviews.preamble');
});
Route::get('/welcome/howitworks', function () {
    return view('subviews.howitworks');
});
Route::get('/welcome/steps', function () {
    return view('subviews.steps');
});
Route::get('/welcome/traditions', function () {
    return view('subviews.traditions');
});
Route::get('/welcome/promises', function () {
    return view('subviews.promises');
});
Route::get('/welcome/responsibility', function () {
    return view('subviews.responsibility');
});




Route::get('/meetings', 'MeetingsController@index', function () {
    return view('meetings');
});
// Meeting day filters.
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
Route::get('/meetings/filter/zoom', 'MeetingsController@filterZoom', function () {
    return view('meetings');
});

Route::get('/events', function () {
    return view('events');
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

/* Dropdown menu routes */
Route::get('/houses', 'HousesController@index', function () {
    return view('houses');
});
    // Sober Living house filters.
    Route::get('/houses/filter/mens', 'HousesController@filterMens', function () {
        return view('houses');
    });
    Route::get('/houses/filter/womens', 'HousesController@filterWomens', function () {
        return view('houses');
    });
    Route::get('/houses/filter/ky', 'HousesController@filterKY', function () {
        return view('houses');
    });
    Route::get('/houses/filter/oh', 'HousesController@filterOH', function () {
        return view('houses');
    });
    Route::get('/houses/filter/busline', 'HousesController@filterBusline', function () {
        return view('houses');
    });
    Route::get('/houses/filter/mat', 'HousesController@filterMAT', function () {
        return view('houses');
    });
Route::get('/clubhouses', function () {
    return view('clubhouses');
});
Route::get('/resources', function () {
    return view('resources');
});