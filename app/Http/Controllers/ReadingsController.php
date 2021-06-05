<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Use the class/model in the App\Models directory.
use App\Models\DailyReflection;
use App\Models\Reading;

class ReadingsController extends Controller
{
    private string $_mainTitle;

    public function loadDailyRef()
    {
        //$date = DailyReflection::pluck('date');
        $_mainTitle = 'Daily Reflection';
        $title = DailyReflection::pluck('title')->first();
        $quote = DailyReflection::pluck('quote')->first();
        $reading = DailyReflection::pluck('reading')->first();

        // Return the meetings view and pass the $meetings variable to the view.
        return view('welcome', compact('_mainTitle', 'title', 'quote', 'reading'));
    }

    public function loadPreamble()
    {
        $_mainTitle = 'A.A. Preamble';
        $title = Reading::where('title', 'Preamble')->pluck('title')->first();
        $quote = Reading::where('title', 'Preamble')->pluck('quote')->first();
        $reading = Reading::where('title', 'Preamble')->pluck('reading')->first();

        // Return the meetings view and pass the $meetings variable to the view.
        return view('welcome', compact('_mainTitle', 'title', 'quote', 'reading'));
    }

    public function loadHowItWorks()
    {
        $_mainTitle = 'A.A. How It Works';
        $title = Reading::where('title', 'How It Works')->pluck('title')->first();
        $quote = Reading::where('title', 'How It Works')->pluck('quote')->first();
        $reading = Reading::where('title', 'How It Works')->pluck('reading')->first();

        // Return the meetings view and pass the $meetings variable to the view.
        return view('welcome', compact('_mainTitle', 'title', 'quote', 'reading'));
    }
}