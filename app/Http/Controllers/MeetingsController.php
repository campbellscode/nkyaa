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

        // Meeting day of the week.
        $meeting_day = 'All';

        // Return the meetings view and pass the $meetings variable to the view.
        return view('meetings', compact('meetings', 'meeting_day'));
    }

    public function filterDaily() {
        // Get all meetings.
        $meetings = Meeting::all();  
        
        // Meeting day of the week.
        $meeting_day = 'Daily';
        
        // Filter string.
        $day = 'dai';
        
        // Filter all meetings where the day field contains 'mo'.
        $meetings = Meeting::where('days', 'LIKE', strtolower('%'.$day.'%'))->get();
        
        // Update the view with filtered results.
        return view('meetings', compact('meetings', 'meeting_day'));
    }

    public function filterMon() {
        // Get all meetings.
        $meetings = Meeting::all();  

        // Meeting day of the week.
        $meeting_day = 'Monday'; 

        // Filter string.
        $day = 'mo';        
        
        // Filter all meetings where the day field contains 'mo'.
        $meetings = Meeting::where('days', 'LIKE', strtolower('%'.$day.'%'))->get();
        
        // Update the view with filtered results.
        return view('meetings', compact('meetings', 'meeting_day'));
        
    }

    public function filterTue() {
        // Get all meetings.
        $meetings = Meeting::all();   

        // Meeting day of the week.
        $meeting_day = 'Tuesday';

        // Filter string.
        $day = 'tu';
        
        // Filter all meetings where the day field contains 'mo'.
        $meetings = Meeting::where('days', 'LIKE', strtolower('%'.$day.'%'))->get();
        
        // Update the view with filtered results.
        return view('meetings', compact('meetings', 'meeting_day'));
    }

    public function filterWed() {
        // Get all meetings.
        $meetings = Meeting::all();        
        
        // Meeting day of the week.
        $meeting_day = 'Wednesday';

        // Filter string.
        $day = 'we';
        
        // Filter all meetings where the day field contains 'mo'.
        $meetings = Meeting::where('days', 'LIKE', strtolower('%'.$day.'%'))->get();
        
        // Update the view with filtered results.
        return view('meetings', compact('meetings', 'meeting_day'));
    }

    public function filterThu() {
        // Get all meetings.
        $meetings = Meeting::all();  
        
        // Meeting day of the week.
        $meeting_day = 'Thursday';
        
        // Filter string.
        $day = 'th';
        
        // Filter all meetings where the day field contains 'mo'.
        $meetings = Meeting::where('days', 'LIKE', strtolower('%'.$day.'%'))->get();
        
        // Update the view with filtered results.
        return view('meetings', compact('meetings', 'meeting_day'));
    }

    public function filterFri() {
        // Get all meetings.
        $meetings = Meeting::all();     
        
        // Meeting day of the week.
        $meeting_day = 'Friday';        
        
        // Filter string.
        $day = 'fr';
        
        // Filter all meetings where the day field contains 'mo'.
        $meetings = Meeting::where('days', 'LIKE', strtolower('%'.$day.'%'))->get();
        
        // Update the view with filtered results.
        return view('meetings', compact('meetings', 'meeting_day'));
    }

    public function filterSat() {
        // Get all meetings.
        $meetings = Meeting::all();        
        
        // Meeting day of the week.
        $meeting_day = 'Saturday';

        // Filter string.
        $day = 'sa';
        
        // Filter all meetings where the day field contains 'mo'.
        $meetings = Meeting::where('days', 'LIKE', strtolower('%'.$day.'%'))->get();
        
        // Update the view with filtered results.
        return view('meetings', compact('meetings', 'meeting_day'));
    }

    public function filterSun() {
        // Get all meetings.
        $meetings = Meeting::all();   
        
        // Meeting day of the week.
        $meeting_day = 'Sunday';
        
        // Filter string.
        $day = 'su';
        
        // Filter all meetings where the day field contains 'mo'.
        $meetings = Meeting::where('days', 'LIKE', strtolower('%'.$day.'%'))->get();
        
        // Update the view with filtered results.
        return view('meetings', compact('meetings', 'meeting_day'));
    }    
}
