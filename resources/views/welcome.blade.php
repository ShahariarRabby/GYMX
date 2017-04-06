
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="top-right links">
        @if (Auth::guest())
            <a href="{{url('/login')}}">Login</a>
            <a href="{{url('/register')}}">Register</a>
        @else
            <a href="/home" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
        @endif

    </div>

    <div class="content">
        <div class="title m-b-md">
            oooo
        </div>

        {{--<div class="links">--}}
            {{--<a href="https://fb.me/shahariarrabby">Facebook</a>--}}
            {{--<a href="https://twitter.com/shahariarrabby">twitter</a>--}}
            {{--<a href="https://plus.google.com/shahariarrabby">Plus</a>--}}
            {{--<a href="https://shahariarrabby.com">Email</a>--}}
            {{--<a href="https://github.com/shahariarrabby">GitHub</a>--}}
        {{--</div>--}}
    </div>
</div>
</body>
</html>
