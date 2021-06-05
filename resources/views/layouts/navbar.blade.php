<?php
date_default_timezone_set('US/Eastern');
$weekday = now()->format('l');
?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <!--<title>{{ config('app.name', 'Laravel') }}</title>-->
    <title>NKY AA - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/navbar.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
</head>

<body>
    @section('navbar')
    <!-- Navigation for big and small screens -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-light hide-on-landscape">
        <a class="navbar-brand" href="/">NKY AA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Menu for portrait orientation -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link cool-link" href="/welcome">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link cool-link" href="/meetings/filter/<?php echo $weekday; ?>">Meetings</a>
                </li>
                <li class="nav-item">
                    <a style="color:grey !important;" class="nav-link cool-link disabled" href="/events">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link cool-link" href="/literature">Literature</a>
                </li>
                <li class="nav-item">
                    <a style="color:grey !important;" class="nav-link cool-link disabled" href="/requests">Requests</a>
                </li>
                <li class="nav-item">
                    <a style="color:grey !important;" class="nav-link cool-link disabled" href="/contact">Contact</a>
                </li>
                <div class="vl"></div>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Non-AA Resources
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/houses">Sober Living</a>
                        <a class="dropdown-item disabled" href="/clubhouses">Clubhouses</a>
                        <a class="dropdown-item disabled" href="/resources">Community Resources</a>
                        <!--<div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>-->
                    </div>
                </li>
                <!--
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>-->
                <form id="collapsedSearch" class="form-inline my-5">
                    <input id="navbarSearch" class="form-control" type="search" placeholder="Search" aria-label="Search"><br>
                    <button id="navbarButton" class="btn btn-success my-5" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </ul>
            <form id="expandedSearch" class="form-inline my-2 my-lg-0">
                <input id="navbarSearch" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button id="navbarButton" class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </nav>

    <!-- Menu for landscape orientation, only show on sm, md, and landscape devices -->
    <nav id="navbar" class="navbar navbar-dark bg-light d-none d-sm-block d-lg-none hide-on-portrait">
        <div class="row">
            <div class="col-2">
                <a class="navbar-brand" href="/">NKY AA</a>
            </div>
            <div class="col-10 text-right">
                <form id="expandedSearch" class="form-inline my-2 my-lg-0">
                    <input id="navbarSearch" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button id="navbarButton" class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>

                    <button class="navbar-toggler pl-5" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </form>
            </div>
        </div>

        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="row">
                    <div class=col-2></div>
                    <div class="col-2">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link cool-link" href="/welcome">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link cool-link" href="/meetings/filter/<?php echo $weekday; ?>">Meetings</a>
                            </li>
                            <li class="nav-item">
                                <a style="color:grey !important;" class="nav-link cool-link disabled" href="/events">Events</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-2">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link cool-link" href="/literature">Literature</a>
                            </li>
                            <li class="nav-item">
                                <a style="color:grey !important;" class="nav-link cool-link disabled" href="/requests">Requests</a>
                            </li>
                            <li class="nav-item">
                                <a style="color:grey !important;" class="nav-link cool-link disabled" href="/contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-5">
                        <ul class="navbar-nav">
                            <!-- <li class="nav-item">Non-AA Resources</li> -->
                            <li class="nav-item">
                                <a class="nav-link cool-link" href="/houses">Sober Living</a>
                            </li>
                            <li class="nav-item">
                                <a style="color:grey !important;" class="nav-link cool-link disabled" href="/clubhouses">Clubhouses</a>
                            </li>
                            <li class="nav-item">
                                <a style="color:grey !important;" class="nav-link cool-link disabled" href="/resources">Community Resources</a>
                            </li>
                            <!--<div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>-->
                            </li>
                        </ul>
                    </div>
                    <div class=col-1></div>
                </div>
            </div>
        </div>
    </nav>
    @show
    @yield('content')
</body>

</html>