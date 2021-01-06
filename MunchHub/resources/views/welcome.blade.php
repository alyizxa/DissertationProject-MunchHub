<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 70vh;
                overflow: hidden;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            #featured{
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                z-index: 1;
            }
            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
                z-index: 1;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                color: #fff;
            }
            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            /* Style the image inside the centered container, if needed */
            .centered img {
                width: 150px;
                border-radius: 50%;}
            @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,800');

            @media (min-width: 500px) {
                .col-sm-6 {
                    width: 50%;
                }
            }
            html, body {
                height: 100%;
                min-height: 18em;
            }

            .frontend-side {
                background-image: url("/storage/uploads/for-cook.jpg");
            }

            .uiux-side {
                background-image: url('/storage/uploads/services4.jpg');
            }

            .split-pane {
                padding-top: 1em;
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
                height: 50%;
                min-height: 9em;
                font-size: 2em;
                color: white;
                font-family: 'Open Sans', sans-serif;
                font-weight:300;
            ;
            }
            @media(min-width: 500px) {
                .split-pane {
                    padding-top: 2em;
                    height: 100%;
                }
            }
            .split-pane > div {
                position: relative;
                top: 50%;
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                transform: translateY(-50%);
                text-align: center;
            }
            .split-pane > div .text-content {
                line-height: 1.6em;
                margin-bottom: 1em;
            }
            .split-pane > div .text-content .big {
                font-size: 2em;
            }
            .split-pane > div img {
                height: 1.3em;
            }
            @media (max-width: 500px) {
                .split-pane > div img {
                    display:none;
                }
            }
            .split-pane button, .split-pane a.button {
                font-family: 'Open Sans', sans-serif;
                font-weight:800;
                background: none;
                border: 1px solid white;
                -moz-border-radius: 5px;
                -webkit-border-radius: 5px;
                border-radius: 5px;
                width: 15em;
                padding: 0.7em;
                font-size: 0.5em;
                -moz-transition: all 0.2s ease-out;
                -o-transition: all 0.2s ease-out;
                -webkit-transition: all 0.2s ease-out;
                transition: all 0.2s ease-out;
                text-decoration: none;
                color: white;
                display: inline-block;
                cursor: pointer;
            }
            .split-pane button:hover, .split-pane a.button:hover {
                text-decoration: none;
                background-color: white;
                border-color: white;
                cursor: pointer;
            }
            .uiux-side.split-pane button:hover, .split-pane a.button:hover {
                color: violet;
            }
            .frontend-side.split-pane button:hover, .split-pane a.button:hover {
                color: blue;
            }

            #split-pane-or {
                font-size: 2em;
                color: white;
                font-family: 'Open Sans', sans-serif;
                text-align: center;
                /*width: 100%;*/
                position: absolute;
                top: 50%;
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                transform: translateY(-50%);
            }
            @media (max-width: 925px) {
                #split-pane-or {
                    top:15%;
                }
            }
            #split-pane-or > div img {
                height: 5.5em;
            }
            @media (max-width: 500px) {
                #split-pane-or {
                    position: absolute;
                    top: 50px;
                }
                #split-pane-or > div img {
                    height:2em;
                }
            }
            @media(min-width: 500px) {
                #split-pane-or {
                    font-size: 3em;
                }
            }
            .big {
                font-size: 2em;
            }

            #slogan {
                position: absolute;
                width: 100%;
                z-index: 100;
                text-align: center;
                vertical-align: baseline;
                top: 0.5em;
                color: white;
                font-family: 'Open Sans', sans-serif;
                font-size: 1.4em;
            }
            @media(min-width: 500px) {
                #slogan {
                    top: 5%;
                    font-size: 1.8em;
                }
            }
            #slogan img {
                height: 0.7em;
            }
            .bold {
                text-transform:uppercase;
            }
            .big {
                font-weight:800;
            }
            .features-icons {
                padding-top: 1rem;
            }

            .features-icons .features-icons-item {
                max-width: 20rem;
            }

            .features-icons .features-icons-item .features-icons-icon {
                height: 7rem;
            }

            .features-icons .features-icons-item .features-icons-icon i {
                font-size: 4.5rem;
            }

            .features-icons .features-icons-item:hover .features-icons-icon i {
                font-size: 5rem;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/') }}">Home</a>
                        <a href="{{ url('/about') }}">About</a>
                            <a id="navbarDropdown" class=" dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->first_name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <a class="dropdown-item" href="{{route('profile.show', Auth::user()->id)}}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('myprofile-form').submit();">
                                    {{ __('My Profile') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                                <form id="myprofile-form" action="{{ route('profile.show', Auth::user()->id)}}" method="get" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @else
                        <a href="{{ url('/about') }}">About</a>
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="top-left">
                    MunchHub
                </div>

            </div>
                <div class='split-pane col-xs-12 col-sm-6 uiux-side'>
                    <div>
                        <img src='https://bit.ly/BCR-design'>
                        <div class='text-content'>
                            <div class="bold">Want the drinks and food served and</div>
                            <div class='big'>Prepared?</div>
                        </div>
                        <a class="button" href="/profiles">
                            SHOW ME VENDORS NEARBY
                        </a>
                    </div>
                </div>
                <div class='split-pane col-xs-12 col-sm-6 frontend-side'>
                    <div>
                        <img src='https://bit.ly/bcr-dev'>
                        <div class='text-content'>
                            <div class="bold">Do you know how to mix, serve and </div>
                            <div class='big'>prepare?</div>
                        </div>
                        <a class='button' href="/register">
                            SIGN UP TO BECOME A VENDOR
                        </a>
                    </div>
                </div>
                <div id='split-pane-or'>
                    <div>
                        <img src='/storage/uploads/e.png'>
                    </div>
                </div>
        </div>

        <section class="features-icons bg-light text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex">
                                <i class="icon-magnifier m-auto text-primary"></i>
                            </div>
                            <h3>1. Find and contact</h3>
                            <p class="lead mb-0">Find and send a message describing your need to the desired vendor</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex">
                                <i class="icon-clock m-auto text-primary"></i>
                            </div>
                            <h3>2. Wait for respond</h3>
                            <p class="lead mb-0">You will receive a message within a week</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex">
                                <i class="icon-check m-auto text-primary"></i>
                            </div>
                            <h3>3. Make arrangents</h3>
                            <p class="lead mb-0">Ready to make the arrangement and customize to your needs!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <div id='app'></div>
    </body>
</html>
