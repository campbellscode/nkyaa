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
        return $new_title;
    }

    public static function getReading() 
    {
        $todays_date = date("Y/m/d");
        $reading = DailyReflection::where('date', '=', date("Y/m/d"))->pluck('reading');
        $strip_array = ['"', "[", "]", "\\r\\n", "\\n", "\\r", "\\u", "201d2014", "2019", "201c"];

        $new_reading = str_replace($strip_array, "", $reading);
        return $new_reading;
    }
}
