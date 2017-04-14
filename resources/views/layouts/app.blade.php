<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title')
    </title>
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('images/welcome/fav/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('images/welcome/fav/favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('images/welcome/fav/favicon-16x16.png')}}" sizes="16x16">
    <link rel="manifest" href="{{asset('images/welcome/fav/manifest.json')}}">
    <link rel="mask-icon" href="{{asset('images/welcome/fav/safari-pinned-tab.svg')}}" color="#5bbad5">
    <link rel="shortcut icon" href="{{asset('images/welcome/fav/favicon.ico')}}">
    <meta name="msapplication-config" content="{{asset('images/welcome/fav/browserconfig.xml')}}">
    <meta name="theme-color" content="#ffffff">
    <!-- Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.0/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.0/jquery-confirm.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"
          integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{asset('css/flat-ui.css')}}" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
            padding-top: 100px;
            min-height: 110vh;
        }

        .fa-btn {
            margin-right: 6px;
        }

        #logins, .navbar {
            box-shadow: 1px 1px 7px 1px black;
            transition: box-shadow 1s;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.8))

        }

        #logins:hover, .navbar:hover {
            box-shadow: 1px 1px 2px 0px black;
        }

        /* Change the white to any color ;) */
        input:-webkit-autofill {
            box-shadow: 0 0 0 1000px #e9e9e9 inset;
            background-color: rgba(255, 255, 255, 0.1);

            /*-webkit-text-fill-color: transparent !important;*/
        }

        input {
            background-color: rgba(255, 255, 255, 0.3) !important;
            outline: none !important;
        }

        /*.form-control, .select2-search input{*/
        /*border: none;*/
        /*}*/

        input:focus {
            background-color: rgba(255, 255, 255, 0.2);
            /*outline: 1px;*/
            border: 2px solid;
            /*border-bottom: 2px solid #1ABC9C !important; }*/
        }
    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" style="padding: 10px 0" href="{{ url('/') }}">
                <img src="{{asset('images/welcome/logoblk.png')}}" height="30" alt="GYMX">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
        integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb"
        crossorigin="anonymous"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>--}}
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script src="{{asset('js/flat-ui.min.js')}}"></script>


{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
<script>
    document.addEventListener('contextmenu', event = > event.preventDefault());

</script>
</body>
</html>
