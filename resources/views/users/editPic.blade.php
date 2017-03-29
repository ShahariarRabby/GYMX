<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>123</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--        <link rel="stylesheet" href="..js/Countdown/demo/css/demo.css">-->
    {{--<link href="{{asset('css/userprofile.css')}}" rel="stylesheet">--}}
    {!! Html::style( asset('css/userprofile.css')) !!}



</head>

<body>
<header>


    <nav class="navbar  navbar-toggleable-md navbar-light bg-faded">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Navbar</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>

            </ul>
            {{--<form class="form-inline my-2 my-lg-0">--}}
            {{--<input class="form-control mr-sm-2" type="text" placeholder="Search">--}}
            {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
            {{--</form>--}}
            {{----}}
            <ul class=" form-inline my-2 my-lg-0" style="list-style: none" >
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu"style="margin-left: -25px" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out" style="margin-left: 6px"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </nav>

    {{--**********************************************************************************************************************************--}}

    <div class="col-2 sidebar" id="sidebar">
        <ul class="sidebarmanu">
            <li>
                <div class="card">
                    <a href="index.php#tabs-1">
                        <div class="cardimg"><img class="card-img-top" src="img/year-1.jpg" alt="Card image cap"></div>
                    </a>
                </div>
            </li>

            <li id=""><a href="index.php#tabs-1"><i class="fa fa-user-circle" aria-hidden="true"></i><span>Account Setting</span></a></li>
            <li><a href=""><i class="fa fa-cogs" aria-hidden="true"></i><span>Account Setting</span></a></li>
            <li><a href=""><i class="fa fa-credit-card-alt" aria-hidden="true"></i><span>Account Setting</span></a></li>



            <li class="submanu" id="">
                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i><span>Account Setting</span></a>
                <ul class="sub-menu" id="submanu">
                    <li><a href="#">Submenu item</a></li>
                    <li><a href="#">Submenu item</a></li>
                    <li><a href="#">Submenu item</a></li>
                </ul>

            </li>



            <li class="submanu"><a href=""><i class="fa fa-diamond" aria-hidden="true"></i>
                    <span>Account Setting</span>   </a>

                <ul class="sub-menu" id="">
                    <li><a href="#">Submenu item</a></li>
                    <li><a href="#">Submenu item</a></li>
                    <li><a href="#">Submenu item</a></li>
                </ul>

            </li>
        </ul>
    </div>

    <div class="" id="anm">
        <a>&nbsp;</a>
    </div>


</header>




<div class="container">
    {{--<div class="row userprofile">--}}
    {!! Form::model($user,['method'=>'PATCH','action'=>["AdminUsersController@update"],'files'=>true]) !!}
    <div class="row userprofile">
        <div class="col-lg-3 col-md-3 col-12 usersummery">
            <div class="spacer">
                <div class="row usersmr">
                    <div class="col-12 img">
                        <img class="userimg" src="{{asset($user->photo ? ("images/".($user->photo->file)):($user->profile->role=="Admin"?"images/2.png":"images/1.png"))}}" alt="{{$user->name}}">
                    </div>
                    <div class="col-12 buttons">
                        <button class="" id="msg">Edit</button>
                    </div>
                </div>

                <div class="row reating">
                    <div class="col-12">
                        <h4>{{$user->name}}</h4>
                        <p>bio Ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                    </div>

                    <div class="col-12">
                        <div class="tabeldata">
                            <table class="table table-striped table-hover" id="table">
                                <tbody>
                                <tr>
                                    <td style="">Status</td>
                                    <td><span class="label label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>User Rating</td>
                                    <td><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i></td>
                                </tr>
                                <tr>
                                    <td>Member Since</td>
                                    <td> Jan 07, 2017 </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::Close() !!}

        <div class="col-lg-9 col-md-8 col-12" id="usercotent">
            <div class="spacer">
                <div id="tabs">
                    <ul class="tabmanu">
                        <li><a href="{{url('/summery')}}">Dashbord<span class="menu-active"><i class="fa fa-caret-up"></i></span></a></li>
                        <li><a href="{{url('/profile')}}">Profile<span class="menu-active"><i class="fa fa-caret-up"></i></span></a></li>
                        <li><a href="{{url('/task')}}">Tasks<span class="menu-active"><i class="fa fa-caret-up"></i></span></a></li>
                        <li><a href="{{url('/members')}}">Membes<span class="menu-active"><i class="fa fa-caret-up"></i></span></a></li>
                        <li><a href="{{url('/payment')}}">Payment Hisory<span class="menu-active"><i class="fa fa-caret-up"></i></span></a></li>
                    </ul>

                    @yield('tabs1')


                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>


<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $(".sidebartog").click(function (e) {
        e.preventDefault;
        $('.wrapper').toggleClass('none');
    });


    $('.submanu > .sub-menu').parent().hover(function () {
        var submenu = $(this).children('.sub-menu');
        if ($(submenu).is(':hidden')) {
            $(submenu).slideDown(200);
        } else {
            $(submenu).slideUp(200);
        }
    });
</script>



{{--<script>--}}
{{--$(function () {--}}
{{--var $tabs = $("#tabs").tabs();--}}

{{--$tabs.tabs({--}}
{{--hide: {--}}
{{--effect: "slide",--}}
{{--direction: "down",--}}
{{--duration: 500--}}
{{--},--}}
{{--show: {--}}
{{--effect: "slide",--}}
{{--direction: "up",--}}
{{--duration: 500--}}
{{--},--}}
{{--beforeActivate: function (event, ui) {--}}
{{--setTimeout(function () {--}}
{{--/* Do something after hide */--}}
{{--$tabs.animate({--}}
{{--top: "500px"--}}
{{--}, function () {--}}
{{--$tabs.animate({--}}
{{--top: "0px"--}}
{{--})--}}
{{--});--}}
{{--$tabs.toggleClass('switch');--}}
{{--}, 500);--}}
{{--}--}}
{{--});--}}


{{--function getSelectedTabIndex() {--}}
{{--$tabIndex = $tabs.tabs('option', 'selected');--}}
{{--var $selected = $("#tabs ul>li a").eq($tabIndex).attr('href');--}}
{{--return $selected;--}}
{{--}--}}
{{--});--}}
{{--</script>--}}
<script>
    $('#password, #confirm_password').on('keyup', function () {
        if ($('#password').val() != "" || $('#confirm_password').val() !="") {
            if ($('#password').val() == $('#confirm_password').val()) {
                $('#message').html('Matching').css('color', 'green');
            } else
                $('#message').html('Not Matching').css('color', 'red');
        }
        else{
            $('#message').html('').css('color', 'red');
        }

    });
</script>
</body>

</html>