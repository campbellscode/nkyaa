<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Use the class/model in the App\Models directory.
use App\Models\Meeting;

class MeetingsController extends Controller
{
    //
    public function index()
    {
        // Query and get all meetings from the Meeting.php model and set to meetings variable.
        $meetings = Meeting::all();

        // Return the meetings view and pass the $meetings variable to the view.
        return view('meetings', ['meetings' => $meetings]);
    }
}
