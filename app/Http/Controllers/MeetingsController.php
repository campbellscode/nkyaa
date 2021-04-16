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

        // Meeting day of the week.
        $meeting_day = 'All';

        // Return the meetings view and pass the $meetings variable to the view.
        return view('meetings', compact('meetings', 'meeting_day'));
    }

    public function filterMon() {
        // Get all meetings.
        $meetings = Meeting::all();  

        // Meeting day of the week.
        $meeting_day = 'Mon'; 

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
        $meeting_day = 'Tue';

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
        $meeting_day = 'Wed';

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
        $meeting_day = 'Thu';
        
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
        $meeting_day = 'Fri';        
        
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
        $meeting_day = 'Sat';

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
        $meeting_day = 'Sun';
        
        // Filter string.
        $day = 'su';
        
        // Filter all meetings where the day field contains 'mo'.
        $meetings = Meeting::where('days', 'LIKE', strtolower('%'.$day.'%'))->get();
        
        // Update the view with filtered results.
        return view('meetings', compact('meetings', 'meeting_day'));
    }    

    public function filterZoom() {
        // Get all meetings.
        $meetings = Meeting::all();  
        
        // Meeting day of the week.
        $meeting_day = 'Zoom';
        
        // Filter string.
        $day = 'zoo';
        
        // Filter all meetings where the day field contains 'mo'.
        $meetings = Meeting::where('days', 'LIKE', strtolower('%'.$day.'%'))->get();
        
        // Update the view with filtered results.
        return view('meetings', compact('meetings', 'meeting_day'));
    }
}
