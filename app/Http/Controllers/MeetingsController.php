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
        //$strMeeting = "meetings";

        // Query and get all meetings from the Meeting.php model and set to meetings variable.
        $meetings = Meeting::all();

        // Return the meetings view and pass the $meetings variable to the view.
        return view('meetings', ['meetings' => $meetings]);
        //return view('meetings')->with(compact('strMeeting', 'meetings'));

    }

    public function filterDaily() {
        // Get all meetings.
        $meetings = Meeting::all();        
        
        // Filter string.
        $day = 'dai';
        
        // Filter all meetings where the day field contains 'mo'.
        $meetings = Meeting::where('days', 'LIKE', strtolower('%'.$day.'%'))->get();
        
        // Update the view with filtered results.
        return view('meetings', ['meetings' => $meetings]);
    }

    public function filterMon() {
        // Get all meetings.
        $meetings = Meeting::all();        
        
        // Filter string.
        $day = 'mo';
        
        // Filter all meetings where the day field contains 'mo'.
        $meetings = Meeting::where('days', 'LIKE', strtolower('%'.$day.'%'))->get();
        
        // Update the view with filtered results.
        return view('meetings', ['meetings' => $meetings]);
    }

    public function filterTue() {
        // Get all meetings.
        $meetings = Meeting::all();        
        
        // Filter string.
        $day = 'tu';
        
        // Filter all meetings where the day field contains 'mo'.
        $meetings = Meeting::where('days', 'LIKE', strtolower('%'.$day.'%'))->get();
        
        // Update the view with filtered results.
        return view('meetings', ['meetings' => $meetings]);
    }

    public function filterWed() {
        // Get all meetings.
        $meetings = Meeting::all();        
        
        // Filter string.
        $day = 'we';
        
        // Filter all meetings where the day field contains 'mo'.
        $meetings = Meeting::where('days', 'LIKE', strtolower('%'.$day.'%'))->get();
        
        // Update the view with filtered results.
        return view('meetings', ['meetings' => $meetings]);
    }

    public function filterThu() {
        // Get all meetings.
        $meetings = Meeting::all();        
        
        // Filter string.
        $day = 'th';
        
        // Filter all meetings where the day field contains 'mo'.
        $meetings = Meeting::where('days', 'LIKE', strtolower('%'.$day.'%'))->get();
        
        // Update the view with filtered results.
        return view('meetings', ['meetings' => $meetings]);
    }

    public function filterFri() {
        // Get all meetings.
        $meetings = Meeting::all();        
        
        // Filter string.
        $day = 'fr';
        
        // Filter all meetings where the day field contains 'mo'.
        $meetings = Meeting::where('days', 'LIKE', strtolower('%'.$day.'%'))->get();
        
        // Update the view with filtered results.
        return view('meetings', ['meetings' => $meetings]);
    }

    public function filterSat() {
        // Get all meetings.
        $meetings = Meeting::all();        
        
        // Filter string.
        $day = 'sa';
        
        // Filter all meetings where the day field contains 'mo'.
        $meetings = Meeting::where('days', 'LIKE', strtolower('%'.$day.'%'))->get();
        
        // Update the view with filtered results.
        return view('meetings', ['meetings' => $meetings]);
    }

    public function filterSun() {
        // Get all meetings.
        $meetings = Meeting::all();        
        
        // Filter string.
        $day = 'su';
        
        // Filter all meetings where the day field contains 'mo'.
        $meetings = Meeting::where('days', 'LIKE', strtolower('%'.$day.'%'))->get();
        
        // Update the view with filtered results.
        return view('meetings', ['meetings' => $meetings]);
    }    
}
