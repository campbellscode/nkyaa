<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Use the class/model in the App\Models directory.
use App\Models\House;

class HousesController extends Controller
{
    //
    public function index()
    {
        // Query and get all meetings from the Meeting.php model and set to meetings variable.
        $houses = House::all();

        // Meeting day of the week.
        //$meeting_day = 'All';

        // Return the meetings view and pass the $meetings variable to the view.
        return view('houses', compact('houses'));
    }
}
