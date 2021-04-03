<?php
namespace App\Http\Controllers;

date_default_timezone_set('US/Eastern');
$weekday = now()->format('l'); 

use Illuminate\Http\Request;
// Use the class/model in the App\Models directory.
use App\Models\DailyReflection;

class DailyReflectionsController extends Controller
{
    public static function getDate() 
    {
        $todays_date = date("Y/m/d");
        $date = DailyReflection::where('date', '=', date("Y/m/d"))->pluck('date');
        $strip_array = ['"', "[", "]"];

        $new_date = str_replace($strip_array, "", $date);
        return $new_date;
    }

    public static function getTitle() 
    {
        $todays_date = date("Y/m/d");
        $title = DailyReflection::where('date', '=', date("Y/m/d"))->pluck('title');
        $strip_array = ['"', "[", "]"];

        $new_title = str_replace($strip_array, "", $title);
        return stripslashes($new_title);
    }

    public static function getQuote() 
    {
        $todays_date = date("Y/m/d");
        $quote = DailyReflection::where('date', '=', date("Y/m/d"))->pluck('quote');
        $strip_array = ['"', "[", "]", "\\r\\n", "\\n", "\\r", "\\u", "201d2014", "2019", "201c", "2014"];
        
        $new_quote = str_replace($strip_array, "", $quote);
        return stripslashes($new_quote);
    }

    public static function getReading() 
    {
        $todays_date = date("Y/m/d");
        $reading = DailyReflection::where('date', '=', date("Y/m/d"))->pluck('reading');
        $strip_array = ['"', "[", "]", "\\r\\n", "\\n", "\\r", "\\u", "201d2014", "2019", "201c", "2014"];

        $new_reading = str_replace($strip_array, "", $reading);
        return stripslashes($new_reading);
    }
}
