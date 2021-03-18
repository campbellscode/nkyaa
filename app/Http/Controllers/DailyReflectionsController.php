<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Use the class/model in the App\Models directory.
use App\Models\DailyReflection;

class DailyReflectionsController extends Controller
{
    public function index()
    {
        // Query and get all houses from the House.php model and set to houses variable.
        $readings = DailyReflection::all();

        // Meeting day of the week.
        $date_filter = 'date';

        // Filter all houses where the type field begins with 'me'.
        $readings = DailyReflection::where('type', 'LIKE', ($filter.'%'))->get();

        // Update the view with filtered results.
        return view('welcome', compact('readings', 'date_filter'));
    }
}
