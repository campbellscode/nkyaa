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
        // Query and get all houses from the House.php model and set to houses variable.
        $houses = House::all();

        // Meeting day of the week.
        $house_filter = 'All';

        // Return the meetings view and pass the $meetings variable to the view.
        return view('houses', compact('houses', 'house_filter'));
    }

    public function filterMens() {
        // Get all houses.
        $houses = House::all();  

        // Get all the house types for use in gender filtering.
        //$types = House::all(type);
        //$types = substr($types, 0, 2);
        
        // House gender filter for title update.
        $house_filter = 'Mens';
        
        // Filter string.
        $filter = 'me';
        
        // Filter all houses where the type field begins with 'me'.
        $houses = House::where('type', 'LIKE', strtolower($filter.'%'))->get();
        
        // Update the view with filtered results.
        return view('houses', compact('houses', 'house_filter'));
    }

    public function filterWomens() {
        // Get all houses.
        $houses = House::all();  
        
        // House gender filter for title update..
        $house_filter = 'Womens';
        
        // Filter string.
        $filter = 'wo';
        
        // Filter all houses where the type field begins with 'wo'.
        $houses = House::where('type', 'LIKE', strtolower($filter.'%'))->get();
        
        // Update the view with filtered results.
        return view('houses', compact('houses', 'house_filter'));
    }

    public function filterKY() {
        // Get all houses.
        $houses = House::all();  
        
        // State filter for title update.
        $house_filter = 'KY';
        
        // Filter string.
        $filter = 'ky';
        
        // Filter all houses where the city field contains 'ky'.
        $houses = House::where('state', 'LIKE', strtolower('%'.$filter.'%'))->get();
        
        // Update the view with filtered results.
        return view('houses', compact('houses', 'house_filter'));
    }

    public function filterOH() {
        // Get all meetings.
        $houses = House::all();  
        
        // State filter for title update.
        $house_filter = 'OH';
        
        // Filter string.
        $filter = 'oh';
        
        // Filter all houses where the city field contains 'oh'.
        $houses = House::where('state', 'LIKE', strtolower('%'.$filter.'%'))->get();
        
        // Update the view with filtered results.
        return view('houses', compact('houses', 'house_filter'));
    }

    public function filterBusline() {
        // Get all houses.
        $houses = House::all();  
        
        // Busline filter for title update.
        $house_filter = 'Busline';
        
        // Filter string.
        $filter = 1;
        
        // Filter all houses where the busline field is true.
        $houses = House::where('busline', 'LIKE', strtolower($filter.'%'))->get();
        
        // Update the view with filtered results.
        return view('houses', compact('houses', 'house_filter'));
    }
}
