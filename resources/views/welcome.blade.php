<!DOCTYPE html>
<html>

<head>
    <title>GYMX </title>
    <meta name="description" content="The Best Gym Website in online">
    <meta name="keywords" content="web, design, html, css, html5, css3, javascript, jquery, bootstrap, development">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.0/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.0/jquery-confirm.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    {{--<link rel="stylesheet" href="sass/animation.css">--}}

    {{--<link rel="stylesheet" href="sass/style.css">--}}
    {!! Html::style( asset('css/animation.css')) !!}
    {!! Html::style( asset('css/style.css')) !!}

</head>

<body>
<header id="headerhome">
    <nav class="">
        <a class="logo " >
            <img class="w" src="{{asset('images/welcome/gymx_logo_2.png')}}" alt="">
            <img class="ww" src="{{asset('images/welcome/gymx_logo_3.png')}}" alt="">
            <img class="www" src="{{asset('images/welcome/gymx_logo_2.png')}}" alt="">
        </a>
        <div class="" id="">
            <ul class="">
                <li class="">
                    <a class="" href="#headerhome">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="">
                    <a class="" href="{{url('#howworks')}}">Fitness</a>
                </li>
                <li class="">
                    <a class="" href="#Gallery">Gallery</a>
                </li>
                <li class="">
                    <a class="" href="#testimonial">Opinion</a>
                </li>
                {{--<li class="">--}}
                    {{--<a class="" href="#trial">registration</a>--}}
                {{--</li>--}}
                <li class="">
                    <a class="" href="#Packages">Packages</a>
                </li>
                <li class="">
                    <a class="" href="#aboutus">About Us</a>
                </li>
                    @if (Auth::guest())
                    <li class="">
                        <a href="{{url('/login')}}">Login</a>
                    </li>
                    <li class="">
                        <a href="#trial">Register</a>
                    </li>
                    @else
                    <li class="">
                        <a href="/home" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
                    </li>
                    @endif


                <li class="">

                    <a class=" " id="" href="{{url('/login')}}">Sign in</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="" id="none">
        <div class="middeltext">
            <h1>CHALLENCGE <br>YOURSELF</h1><span class="dash"></span>
            <p>Challenge yourself at gym x with your daily dose of fitness using functional movements performed at high intensity. It time to go beyond your limits and discover your personal potential now </p>
            <button class="btns signin" id="signin">Sign In</button>
            <a href="" class="btnl">Free Trial</a>
        </div>
        <div class="join"><a href="{{url('/register')}}" id="content" class="joinnow ">Join<br>Now</a></div>
    </div>


    <div class="none" id="formsingin" style="">
        <form class="singinform" role="form" method="POST" action="{{ url('/login') }}">
        {{--<form class="singinform ">--}}
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}
                <style>
                    /* Change the white to any color ;) */
                    input:-webkit-autofill {
                        -webkit-box-shadow: 0 0 0px 1000px #1E222C inset;
                        -webkit-text-fill-color: white !important;
                    }
                </style>
                {{--<div class="col-md-6">--}}
                    {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">--}}
                    <input type="email" required class="col-12" id="inputEmail3" name="email" value="{{ old('email') }}" placeholder="Email">
                    @if ($errors->has('email') || $errors->has('password'))
                    <script>
                        $.confirm({
                            title: '<span style="color: orangered;">Sorry!</span>',
                            content: '<span style="color: black;">Incorrect Email or Password</span>',
                            type: 'red',
                            typeAnimated: true,
                            buttons: {
                                tryAgain: {
                                    text: 'Try again',
                                    btnClass: 'btn-red',
                                    action: function(){
                                    }
                                },
                                close: function () {
                                }
                            }
                        });
                    </script>
                    @endif
                {{--</div>--}}
            </div>

            {{--<div class="form-group row">--}}
                {{--<input type="email" class="col-12" id="inputEmail3" placeholder="Email">--}}
            {{--</div>--}}
            <div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">



                    <input id="inputPassword3" type="password" class="form-control" placeholder="Password" required name="password">

                    {{--@if ($errors->has('password'))--}}

                        {{--<script>--}}
                        {{--$.confirm({--}}
                            {{--title: 'Encountered an error!',--}}
                            {{--content: '<span style="color: black;">Something went downhill, this may be serious</span>',--}}
                            {{--type: 'red',--}}
                            {{--typeAnimated: true,--}}
                            {{--buttons: {--}}
                                {{--tryAgain: {--}}
                                    {{--text: 'Try again',--}}
                                    {{--btnClass: 'btn-red',--}}
                                    {{--action: function(){--}}
                                    {{--}--}}
                                {{--},--}}
                                {{--close: function () {--}}
                                {{--}--}}
                            {{--}--}}
                        {{--});--}}

                    {{--</script>--}}
                    {{--@endif--}}

            </div>
            {{--<div class="form-group row">--}}
                {{--<input type="password" class="col-12" id="inputPassword3" placeholder="Password">--}}

            {{--</div>--}}

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                        <label style="font-size: small">
                            <input type="checkbox" name="remember"> Remember
                        </label>

                    </div>
                </div>
            </div>
            <div class="form-group row">

                    <button type="submit" class="btns col">
                      Sign in
                    </button>
                <button type="submit" class="btnl signin col">Cancel</button>
                    {{--<a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>--}}
                <a class="btn btn-link"  style="font-size: small;color: whitesmoke" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
            </div>
            {{--<div class="form-group row">--}}
                {{--<button type="submit" class="btns col"><a href="https://facebook.com">Sign in</a></button>--}}
                {{--<button type="submit" class="btnl signin col">Cancel</button>--}}
            {{--</div>--}}
        </form>
    </div>
</header>
<!--*************************************************************************************************-->

<section class="container sndpage ">
    <div class="card-deck">
        <div class="card">

            <div class="card-block">
                <div class="cardlink">
                    <a class="" href=""><img class="card-img-top" src="{{asset('images/welcome/card1.jpg')}}" alt="Card image cap">
                        <h4 class="card-title">Cycling & Cardio</h4></a>
                </div>
                <p class="card-text">majority have sufered ion in some form, by inj alteranjected humour,in the middle of text. All the Lorem Ipsum generators rnet tend to repe</p>
            </div>
        </div>
        <div class="card">

            <div class="card-block">
                <div class="cardlink">
                    <a class="" href=""><img class="card-img-top" src="{{asset('images/welcome/card2.jpg')}}" alt="Card image cap">
                        <h4 class="card-title">Card title</h4></a>
                </div>
                <p class="card-text">majority have suffered alteration in some form, by injected humour, or randomised words ing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repe</p>
            </div>
        </div>
        <div class="card">

            <div class="card-block">
                <div class="cardlink">
                    <a class="" href=""><img class="card-img-top" src="{{asset('images/welcome/card3.jpg')}}" alt="Card image cap">
                        <h4 class="card-title">Card title</h4></a>
                </div>
                <p class="card-text">majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are gInternet tend to repe</p>
            </div>
        </div>
    </div>
</section>
<!--**************************************************************************************-->
<section id="howworks" class="howworks">
    <div class="row">
        <div class="col-lg-6 col-12 picbox" style=""><img src="{{asset('images/welcome/fitness-about.png')}}" class="pic  animated bounceInUp" alt="">
            <div class="rt-fitness">All <span style="font-weight: 600">About</span>
                <br> Fitness</div>
        </div>
        <div class="col-lg-6 col-12 textbox">
            <div>
                <h3><i class="fa fa-arrows-v" aria-hidden="true" style="font-size: 28px; "></i><a href="">Weight Lifting</a></h3>
                <p>Weightlifting, also called Olympic weightlifting, is an athletic discipline in the modern Olympic programme in which the athlete attempts a maximum-weight single lift of a barbell loaded with weight plates.</p>
            </div>
            <div>
                <h3><i class="fa fa-wheelchair-alt" aria-hidden="true" style="font-size: 28px;"></i><a href="">Running</a></h3>
                <p>Running is a method of terrestrial locomotion allowing humans and other animals to move rapidly on foot. Running is a type of gait characterized by an aerial phase in which all feet…</p>
            </div>
            <div>
                <h3><i class="fa fa-female" aria-hidden="true" style="font-size: 28px;"></i><a href="">Yoga</a></h3>
                <p>Yoga, is a meditative means of discovering dysfunctional perception and cognition, as well as overcoming it for release from suffering, inner peace and salvation</p>
            </div>
        </div>
    </div>
</section>

<!--************************************************************************************************************************-->
<section id="Gallery" class="section-meals container-fluid">
    1
    <ul class="">
        <li class="item " >
            <figure><img src="{{asset('images/welcome/g1.jpg')}}" alt=""></figure>
        </li>
        <li class="item " >
            <figure><img src="{{asset('images/welcome/g1.jpg')}}" alt=""></figure>
        </li>
        <li class="item ">
            <figure><img src="{{asset('images/welcome/g1.jpg')}}" alt=""></figure>
        </li>
        <li class="item ">
            <figure><img src="{{asset('images/welcome/g1.jpg')}}" alt=""></figure>
        </li>
    </ul>

    <ul>
        <li>
            <figure><img src="{{asset('images/welcome/g1.jpg')}}" alt=""></figure>
        </li>
        <li>
            <figure><img src="{{asset('images/welcome/g1.jpg')}}" alt=""></figure>
        </li>
        <li>
            <figure><img src="{{asset('images/welcome/g1.jpg')}}" alt=""></figure>
        </li>
        <li>
            <figure><img src="{{asset('images/welcome/g1.jpg')}}" alt=""></figure>
        </li>
    </ul>

    <div>
        <h5 class="photoline"><i class="fa fa-smile-o" aria-hidden="true"></i>
            <br>Works More Then It Looks
            <br>
        </h5>
    </div>
</section>
<!--************************************************************************************************************************-->

<section id="testimonial" class="testimonial">

    <div class="container">
        <div class="row  center">
            <h2>Our customers can't live without us</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <i class="fa fa-quote-left" aria-hidden="true"></i>

                <blockquote>
                    xt of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                    <cite><img src="{{asset('images/welcome/g3.jpg')}}" alt="">Ema Watson</cite>
                </blockquote>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <i class="fa fa-quote-left" aria-hidden="true"></i>

                <blockquote>
                    g Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look lpsum as their default m
                    <cite><img src="{{asset('images/welcome/1.jpg')}}" alt="">Iffat Ali</cite>
                </blockquote>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                <blockquote>
                    majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passaext. All the Lorem Ipsum generators on the Internet tend to repe
                    <cite><img src="{{asset('images/welcome/2.jpg')}}" alt="">Shakib Khan</cite>
                </blockquote>
            </div>
        </div>

    </div>
</section>

<!---**************************************************-->

<section id="trial" class="trial">
    <div class="container">
        <div class="row bgimg">
            <div class="col-lg-6 col-12 bgimg1"></div>

            <div class="col-lg-6 trialfrom">
                <div>
                    <h3>Rady to try</h3>
                    <p>majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightlpe</p>
                </div>

                <div class="take">
                    <form class="row">
                        <style>
                            a#freetrial:hover{
                                color: white;
                            }
                        </style>
                        <a href="{{url('/register')}}" id="freetrial" class="btn col-12">REQUEST A FREE TRIAL</a>
                    </form>
                </div>
            </div>

        </div>

    </div>
</section>
<!--*************************************************-->
<section id="Packages">
    <div class="container-flud">
        <div class="row">
            <div class="col-12">
                <style>
                    #Packages a:active{
                        color: white;
                        text-decoration: none;
                    }
                </style>
                <div class="memebership">
                    <h3 class="title-separator title " s><span>PACKAGES</span></h3></div>

            </div>
        </div>
        <div class="row planpic">
            <div class="col-lg-6 col-12  month">

                <div class="row ">
                    <div class="col-lg-6 col-12 card animated pulse">
                        <h1>&#2547; 3000</h1>
                        <div class="card-block">
                            <h4 class="card-title">PER MONTH</h4>
                            <p class="card-text">Smajority have isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repe</p>
                            <a href="{{url('/register')}}" class="">REGISTER NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-lg-6 col-12 year">

                <div class="row ">
                    <div class="col-lg-6 col-12 card ">
                        <h1>&#2547; 15000</h1>
                        <div class="card-block">
                            <h4 class="card-title">PER YEAR</h4>
                            <p class="card-text">majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are </p>
                            <a href="{{url('/register')}}" class="">REGISTER NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--*****************************************************************-->

<section id="aboutus" class="aboutus">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <h1>About Us</h1>
                <p>
                    majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repe
                    <br> majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repe
                </p>
            </div>

        </div>
    </div>
</section>


<!--*********************************************************-->


<!--*********************************************************-->


<footer>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="padd">
                    <img src="{{asset('images/welcome/logo_small.png')}}" alt="">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 pad">
                <div class="padd">

                    <h3>Opaning hour</h3>

                    <table class="table table-sm">

                        <tbody>
                        <tr>
                            <td>Friday</td>
                            <td>07:00-17:00</td>
                        </tr>
                        <tr>
                            <td>Saturday</td>
                            <td>07:00-17:00</td>
                        </tr>
                        <tr>
                            <td>Sunday</td>
                            <td>07:00-17:00</td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td>07:00-17:00</td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td>07:00-17:00</td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td>07:00-17:00</td>
                        </tr>
                        <tr>
                            <td>Monday</td>
                            <td>07:00-17:00</td>
                        </tr>
                        </tbody>
                    </table>
                </div></div>
            <div class="col-lg-4 col-md-4 col-12 con">
                <div class="padd">

                    <h3 class="contact">CONTACT</h3>
                    <h4><i class="fa fa-phone" aria-hidden="true"></i>
                        08000 99911122</h4>
                    <span>Hotline available 24 hours</span>
                    <div class="row">
                        <div class="col-6"><i class="fa fa-facebook-official" aria-hidden="true"></i><span> Facebook</span>
                        </div>
                        <div class="col-6"><i class="fa fa-twitter" aria-hidden="true"></i><span> twitter</span>
                        </div>
                        <div class="col-6"><i class="fa fa-instagram" aria-hidden="true"></i><span> Instargram</span>
                        </div>
                        <div class="col-6"><i class="fa fa-google-plus-official" aria-hidden="true"></i><span> Google Plus</span>
                        </div>
                    </div>
                </div></div>
        </div>
    </div>

    <div class="cent">
        <p>Copyright &copy; Shahariar Rabby</p>
    </div>
</footer>



<script>
    $(".signin").click(function () {
        if ($('#none').hasClass('none')) {
            $('#none').removeClass('none');
            $('#navnone').removeClass('none');
            $('#formsingin').addClass('none');
        } else {
            $('#formsingin').removeClass('none');
            $('#none').addClass('none');
            $('#navnone').addClass('none');
        }
    });



</script>
</body>

</html>








{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<title>Laravel</title>--}}

    {{--<!-- Fonts -->--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}

    {{--<!-- Styles -->--}}
    {{--<style>--}}
        {{--html, body {--}}
            {{--background-color: #fff;--}}
            {{--color: #636b6f;--}}
            {{--font-family: 'Raleway', sans-serif;--}}
            {{--font-weight: 100;--}}
            {{--height: 100vh;--}}
            {{--margin: 0;--}}
        {{--}--}}

        {{--.full-height {--}}
            {{--height: 100vh;--}}
        {{--}--}}

        {{--.flex-center {--}}
            {{--align-items: center;--}}
            {{--display: flex;--}}
            {{--justify-content: center;--}}
        {{--}--}}

        {{--.position-ref {--}}
            {{--position: relative;--}}
        {{--}--}}

        {{--.top-right {--}}
            {{--position: absolute;--}}
            {{--right: 10px;--}}
            {{--top: 18px;--}}
        {{--}--}}

        {{--.content {--}}
            {{--text-align: center;--}}
        {{--}--}}

        {{--.title {--}}
            {{--font-size: 84px;--}}
        {{--}--}}

        {{--.links > a {--}}
            {{--color: #636b6f;--}}
            {{--padding: 0 25px;--}}
            {{--font-size: 12px;--}}
            {{--font-weight: 600;--}}
            {{--letter-spacing: .1rem;--}}
            {{--text-decoration: none;--}}
            {{--text-transform: uppercase;--}}
        {{--}--}}

        {{--.m-b-md {--}}
            {{--margin-bottom: 30px;--}}
        {{--}--}}
    {{--</style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="flex-center position-ref full-height">--}}
    {{--<div class="top-right links">--}}
        {{--@if (Auth::guest())--}}
            {{--<a href="{{url('/login')}}">Login</a>--}}
            {{--<a href="{{url('/register')}}">Register</a>--}}
        {{--@else--}}
            {{--<a href="/home" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
            {{--</a>--}}
            {{--<a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>--}}
        {{--@endif--}}

    {{--</div>--}}

    {{--<div class="content">--}}
        {{--<div class="title m-b-md">--}}
            {{--oooo--}}
        {{--</div>--}}

        {{--<div class="links">--}}
            {{--<a href="https://fb.me/shahariarrabby">Facebook</a>--}}
            {{--<a href="https://twitter.com/shahariarrabby">twitter</a>--}}
            {{--<a href="https://plus.google.com/shahariarrabby">Plus</a>--}}
            {{--<a href="https://shahariarrabby.com">Email</a>--}}
            {{--<a href="https://github.com/shahariarrabby">GitHub</a>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
