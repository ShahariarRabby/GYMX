<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>404</title>
    <link rel="apple-touch-icon" sizes="120x120" href="images/welcome/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/welcome/fav/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/welcome/fav/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="images/welcome/fav/manifest.json">
    <link rel="mask-icon" href="images/welcome/fav/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="images/welcome/fav/favicon.ico">
    <meta name="msapplication-config" content="images/welcome/fav/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    {!! Html::style( asset('css/animation.css')) !!}

</head>
<style>
    body {
        background: url('{{asset('images/404.gif')}}') no-repeat fixed center;
        background-color: #E9FE6F;
    }


    a.logo{
        display: inline-block;
        width: 300px;
        margin: 2% 0 0 2%;
        float: left; }

    a.logo .www {
        width: 15%;
        -webkit-animation: bounce 2.1s linear infinite alternate;
        -moz-animation: bounce 2.1s linear infinite alternate;
        -ms-animation: bounce 2.1s linear infinite alternate;
        -o-animation: bounce 2.1s linear infinite alternate;
        animation: bounce 2.1s linear infinite alternate;
    }/* this comes last */
    .logo .w {
        width: 15%;
        /*-webkit-animation: bounce 2.2s infinite;*/
        /*animation: bounce 2.2s infinite;*/
        -webkit-animation: bounce 2s linear infinite alternate;
        -moz-animation: bounce 2s linear infinite alternate;
        -ms-animation: bounce 2s linear infinite alternate;
        -o-animation: bounce 2s linear infinite alternate;
        animation: bounce 2s linear infinite alternate; /* this comes last */

    }

</style>

<body>
<nav class="navbar">
        <a class="logo navbar-brand" href="{{url('/home')}}">
            <img class="w" src="{{asset('images/welcome/gymx_logo_2.png')}}" alt="">
            <img class="ww" src="{{asset('images/welcome/gymx_logo_3.png')}}" alt="">
            <img class="www" src="{{asset('images/welcome/gymx_logo_2.png')}}" alt="">
        </a>
</nav>
</body>

</html>
