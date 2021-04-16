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
        <!-- <link href="{{ asset('css/master.css') }}" rel="stylesheet"> -->
        <link href="{{ asset('css/custom-nav.css') }}" rel="stylesheet">

    </head>

    <body>
        @section('navbar')
            <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-light">
                <a class="navbar-brand" href="/">NKY AA</a>
                <button class="navbar-toggle collapsed" type="button" data-toggle="overlay" data-target="#overlay" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!--<div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                    <a onclick="gotoAbout()">About</a>
                </li>
                <li>
                    <a onclick="gotoProjects()">Work</a>
                </li>
                <li>
                    <a onclick="gotoServices()">Services</a>
                </li>
            </ul>
            <div class="home-button">
                <a class="fa fa-home" style="color:#00b6f0;" onclick="gotoHome()"></a>
            </div>
            <div class="button">
                <a class="btn-open" href="#"></a>
            </div>
        </div>
        <div id="back-button" class="back-button">
            <a onclick="gotoBack()" routerLink="/" class="fa fa-arrow-left" style="color:#00b6f0;"></a>
        </div>-->
    </nav>

    <div id="overlay" class="overlay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="wrap">
            <ul class="wrap-nav">
                <li>
                    <p style="color:#00b6f0;">About</p>
                    <ul>
                        <li>
                            <a onclick="gotoAbout()">About Me</a>
                        </li>
                        <!--<li>
                            <a onclick="gotoPortfolio()" routerLink="/recreation-component">Recreation</a>
                        </li>-->
                        <li>
                            <a onclick="gotoSkills()">Skills</a>
                        </li>
                        <li>
                            <a onclick="gotoAcademics()">Academics</a>
                        </li>
                        <li>
                            <a onclick="gotoCerts()">Certifications</a>  
                        </li>
                    </ul>
                </li>
                <li>
                    <p style="color:#00b6f0;">Work</p>
                    <ul>
                        <li>
                            <a href="./assets/images/lee-campbell-resume.pdf" target="_blank">Resume</a>
                        </li>
                        <li>
                            <a onclick="gotoProjects()">Projects</a>
                        </li>
                        <li>
                            <a onclick="gotoPortfolio()" routerLink="/portfolio-component">Graphic Design</a>
                        </li>
                        <li>
                            <a onclick="gotoPortfolio()" routerLink="/audpro-component">Audio Production</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <p style="color:#00b6f0;">Services</p>
                    <ul>
                        <li>
                            <a onclick="gotoServices()">What I Do</a>
                        </li>
                        <li>
                            <a onclick="gotoPortfolio()" routerLink="/merch-component">Merch</a>                
                        </li>
                        <li>
                            <a onclick="gotoPayments()">Payments</a>                
                        </li>
                        <li>
                            <a onclick="gotoFeedback()">Feedback</a>
                        </li>
                        <!--<li>
                            <a onclick="gotoContact()">Contact</a>
                        </li>-->
                    </ul>
                </li>
            </ul>
            <div class="social-1">

                <a href="tel:+1-859-539-8659">
                    <div class="social-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                </a>
                <a href="https://www.facebook.com/lcampbelldeveloper" target="_blank">
                    <div class="social-icon">
                        <i class="fa fa-facebook"></i>
                    </div>
                </a>
                <a href="http://m.me/lcampbelldeveloper" target="_blank">
                    <div class="social-icon">
                        <i class="fa fa-commenting"></i>
                    </div>
                </a>
                <a href="https://www.linkedin.com/in/lee-campbell-0a8740b5/" target="_blank">
                    <div class="social-icon">
                        <i class="fa fa-linkedin"></i>
                    </div>
                </a>
            </div>
            <div class="social-2">
                <a href="https://github.com/lcampbell-developer" target="_blank">
                    <div class="social-icon">
                        <i class="fa fa-github"></i>
                    </div>
                </a>
                <a href="https://www.youtube.com/channel/UC9wl-hnvclgDgM9_86D8TWg" target="_blank">
                    <div class="social-icon">
                        <i class="fa fa-youtube-play"></i>
                    </div>
                </a>
                <a href="https://goo.gl/maps/ScWaaAENLX52" target="_blank">
                    <div class="social-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                </a>
                <a href="mailto:lcampbell.developer@gmail.com" target="_blank">
                    <div class="social-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>

</body>

</html>

