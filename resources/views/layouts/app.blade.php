<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--style rel="stylesheet">
        .main-timeline{
            position: relative;
            -webkit-transition: all 0.4s ease 0s;
            -moz-transition: all 0.4s ease 0s;
            -ms-transition: all 0.4s ease 0s;
            transition: all 0.4s ease 0s;
        }
        .main-timeline:before{
            content: "";
            width: 3px;
            height: 100%;
            background: #1abc9c;
            position: absolute;
            top: 0;
            left: 50%;
        }
        .main-timeline .timeline{
            margin-bottom: 50px;
            position: relative;
        }
        .main-timeline .timeline:before,
        .main-timeline .timeline:after{
            content: "";
            display: block;
            width: 100%;
            clear: both;
        }
        .main-timeline .timeline-icon{
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #1abc9c;
            overflow: hidden;
            margin-left: -23px;
            position: absolute;
            top: 0;
            left: 50%;
            text-align: center;
        }
        .main-timeline .timeline-icon i{
            font-size: 30px;
            line-height: 50px;
            color: #fff;
        }
        .main-timeline .timeline-content{
            width: 45%;
            padding: 20px;
            border-radius: 5px;
            background: #fff;
            -webkit-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            -ms-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -ms-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }
        .main-timeline .timeline-content:before{
            content: "";
            border-left: 7px solid #1abc9c;
            border-top: 7px solid transparent;
            border-bottom: 7px solid transparent;
            position: absolute;
            left: 45%;
            top: 20px;
        }
        .main-timeline .title{
            font-size: 30px;
            font-weight: 300;
            color: #fff;
            padding: 10px;
            background: #1abc9c;
            border-radius: 3px 3px 0 0;
            margin: -20px -20px 10px;
        }
        .main-timeline .description{
            font-size: 14px;
            color: #726f77;
        }
        .main-timeline .read-more{
            display: inline-block;
            font-size: 12px;
            color: #64d8c1;
            text-transform: uppercase;
            padding: 5px 15px;
            border: 2px solid #64d8c1;
            position: relative;
            border-radius: 5px;
            -webkit-box-shadow: 2px 2px 0 #64d8c1;
            -moz-box-shadow: 2px 2px 0 #64d8c1;
            -ms-box-shadow: 2px 2px 0 #64d8c1;
            box-shadow: 2px 2px 0 #64d8c1;
        }
        .main-timeline .read-more:hover{
            top: 2px;
            left: 2px;
            box-shadow: none;
        }
        .main-timeline .timeline-content.right{
            float: right;
        }
        .main-timeline .timeline-content.right:before{
            content: "";
            right: 45%;
            left: inherit;
            border-left: 0;
            border-right: 7px solid #1abc9c;
        }
        @media only screen and (max-width: 990px){
            .main-timeline .title{
                font-size: 25px;
            }
            .main-timeline .timeline-content::before{
                top: 16px;
            }
        }
        @media only screen and (max-width: 767px){
            .main-timeline{ margin-left: 20px; }
            .main-timeline:before{ left: 0; }
            .main-timeline .timeline-content{
                width: 90%;
                float: right;
            }
            .main-timeline .timeline-content:before,
            .main-timeline .timeline-content.right:before{
                left: 10%;
                right: inherit;
                margin-left: -6px;
                border-left: 0;
                border-right: 7px solid #1abc9c;
            }
            .main-timeline .timeline-icon{
                left: 0;
            }
        }
        @media only screen and (max-width: 479px){
            .main-timeline .timeline-content{
                width: 85%;
            }
            .main-timeline .timeline-content:before,
            .main-timeline .timeline-content.right:before{
                left: 15%;
            }
            .main-timeline .title{
                font-size: 20px;
            }
            .main-timeline .timeline-content:before{
                top: 13px;
            }
        }
        
    </style-->

    <style rel="stylesheet">
        .material-switch > input[type="checkbox"] {
            display: none;   
        }

        .material-switch > label {
            cursor: pointer;
            height: 0px;
            position: relative; 
            width: 40px;  
        }

        .material-switch > label::before {
            background: rgb(0, 0, 0);
            box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            content: '';
            height: 16px;
            margin-top: -8px;
            position:absolute;
            opacity: 0.3;
            transition: all 0.4s ease-in-out;
            width: 40px;
        }
        .material-switch > label::after {
            background: rgb(255, 255, 255);
            border-radius: 16px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
            content: '';
            height: 24px;
            left: -4px;
            margin-top: -8px;
            position: absolute;
            top: -4px;
            transition: all 0.3s ease-in-out;
            width: 24px;
        }
        .material-switch > input[type="checkbox"]:checked + label::before {
            background: inherit;
            opacity: 0.5;
        }
        .material-switch > input[type="checkbox"]:checked + label::after {
            background: inherit;
            left: 20px;
        }
    </style>
   
</head>
<body style="padding-bottom: 100px;">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="/questions">Questions</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>