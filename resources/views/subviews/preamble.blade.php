<?php use App\Http\Controllers\ReadingsController; ?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="{{ asset('css/master.css') }}" rel="stylesheet">
        <link href="{{ asset('css/dailyreflections.css') }}" rel="stylesheet">        
    </head>       

    <body>   
        <div class="text-black">
            <h5>Alcoholics Anonymous is a fellowship of men and women who
                share their experience, strength and hope with each other that
                they may solve their common problem and help others to recover
                from alcoholism. 
            </h5>
            <h5>The only requirement for membership is a desire to stop drinking.
                There are no dues or fees for A.A. membership; we are selfsupporting through our own contributions. A.A. is not allied with
                any sect, denomination, politics, organization or institution; does
                not wish to engage in any controversy, neither endorses nor
                opposes any causes. Our primary purpose is to stay sober and
                help other alcoholics to achieve sobriety.  
            </h5>
        </div>        
    </body>
</html>