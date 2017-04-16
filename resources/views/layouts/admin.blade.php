<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/fav/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('images/fav/favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('images/fav/favicon-16x16.png')}}" sizes="16x16">
    <link rel="manifest" href="{{asset('images/fav/manifest.json')}}">
    <link rel="mask-icon" href="{{asset('images/fav/safari-pinned-tab.svg')}}" color="#5bbad5">
    <link rel="shortcut icon" href="{{asset('images/fav/favicon.ico')}}">
    <meta name="msapplication-config" content="{{asset('images/fav/browserconfig.xml')}}">
    <meta name="theme-color" content="#ffffff">


    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/all.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <script src="https://use.fontawesome.com/db83305422.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Flat UI -->
    <link href="{{asset('css/flat-ui.css')}}" rel="stylesheet">

    <!-- Custom Style -->
    <link href="{{asset('css/styleadmin.css')}}" rel="stylesheet">

    <!-- Sidebar Css -->
    <link href="{{asset('css/plugins/sidebar.css')}}" rel="stylesheet">

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,800" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Nova+Flat" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />


    <link rel="shortcut icon" href="img/favicon.ico">

    {{--<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->--}}
    {{--<!--[if lt IE 9]>--}}
    {{--<script src="plugins/html5shiv.js"></script>--}}
    {{--<script src="js/plugins/respond.min.js"></script>--}}
    {{--<![endif]-->--}}
</head>
<body>
<style>

   .sub-menu {
             display:none;
         }
   .recharges{
       display: none;
       list-style: none;
   }
    ul{
        list-style: none;
    }
</style>
<?php

use Carbon\Carbon;$date2 = Carbon::now();
$date2->modify('-1 seconds');
$result2 = \App\Profile::Where('discontinued','<=',$date2)->get();
// echo $resultaCT = \App\Profile::Where('discontinued','>=',$now)->get();
foreach ($result2 as $result2){
    $result3 =  $result2['id'];
    $update['is_active']= 'Not Active';
    $notactive = \App\User::whereProfile_id($result3)->update($update);
}

?>

<div id="wrapper" class="">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav" id="MainMenu">


            {{--<li class="sidebar-brand">--}}
                {{--<a href="#">--}}

                {{--</a>--}}
            {{--</li>--}}
            <li class="dropdown" style="margin-top: 25px" >
                <a href="{{url('/admin')}}"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> &nbsp;&nbsp;Dashboard</a>
            </li>
            <li class="dropdown">

                <a  href="" class="preventDefault" ><i class="fa fa-users" aria-hidden="true"></i>
                  &nbsp;  Users<span class="fa "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{url('admin/user/details')}}">
                            User Summery</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/users/')}}">
                            All Users</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/users/create')}}">
                            Create User</a>
                    </li>
                    <li>
                        <a href="{{route('discontinue.index')}}">
                            Discountable User</a>
                    </li>
                    <li>
                        <a href="{{url('admin/discontinued')}}">
                            Disconnected User</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li class="dropdown">
                <a href="" class="preventDefault"><i class="fa fa-money" aria-hidden="true"></i>

                    &nbsp;    Payments<span class="fa "></span></a>
                <ul class="sub-menu none">

                            <li>
                                <a href="{{url('admin/payments/details')}}">Payment Summery</a>
                            </li>
                    <li>
                                <a href="{{route('payment.index')}}">All Payments</a>
                            </li>
                            <li>
                                <a href="{{route('payment.create')}}">Create Payment</a>
                            </li>

                        <!-- /.nav-third-level -->

                    <li class="dropdown">
                        <a href="" class="preventDefault">
                            Recharges<span class="fa "></span></a>
                        <ul class="">
                            <li>
                                <a href="{{ url('admin/card')}}">All Cards</a>
                            </li>
                            <li>
                                <a href="{{ url('admin/card/create')}}">Add Card</a>
                            </li>
                            <li>
                                <a href="{{ url('admin/bkash')}}">Bkash</a>
                            </li>


                        </ul>
                        <!-- /.nav-third-level -->
                    </li>


                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li class="dropdown">
                <a href="" class="preventDefault" ><i class="fa fa-sitemap fa-fw"></i>
                    &nbsp;  &nbsp;  &nbsp; Packages<span class="fa "></span></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{route('package.index')}}">All Packages</a>
                    </li>
                    <li>
                        <a href="{{route('package.create')}}">Create Package</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>



            <li class="dropdown">
                <a href="" class="preventDefault"><i class="fa fa-tasks fa-fw"></i> &nbsp;  &nbsp;  &nbsp; Tasks<span class="fa "></span></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ url('admin/task')}}">All Tasks</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/task/create')}}">Create Task</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>


            <li>
                <a href="{{ url('admin/chat')}}"><i class="fa fa-envelope"></i> &nbsp;  Message</a>
            </li>
            {{--<li>--}}
                {{--<a href="#"><span class="glyphicon glyphicon-calendar" aria-hidden="true">&nbsp;</span>Calendar</a>--}}
            {{--</li>--}}


        </ul>
    </div>

    <div id="page-content-wrapper">
        <style>
            .navbar-default .navbar-toggle:before {
                display: none;
            }
        </style>



        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>

                    </button>
                    <a class="navbar-brand" style="font-family: 'Montserrat'; font-weight: 800" id="logo" href="{{url('/admin')}}">GYMX</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                    <ul class="nav navbar-nav navbar-right">

                                              {{--<form class="navbar-form navbar-left" action="#" role="search">--}}
             {!! Form::open(['method'=>'get','action'=>"AdminUsersController@blood",'class'=>'navbar-form navbar-left']) !!}

                        <div class="form-group">
                                <div class="input-group">
                                    <input name="blood" class="form-control" id="navbarInput-01" type="search" placeholder="Blood Search">
                                    <span class="input-group-btn">
                                                      <button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>
                                                    </span>
                                </div>
                            </div>
                        </form>


                        <li><a href="{{url('/')}}" data-toggle="tooltip" data-placement="bottom" title="Visit Site" target="_blank"><i class="material-icons">home</i></a></li>
                        <li><a href="{{url('/profile')}}" data-toggle="tooltip" data-placement="bottom" title="Visit User" target="_blank"><i class="material-icons">contacts</i></a></li>
                        {{--<li><a href="{{url('/profile')}}" data-toggle="tooltip" data-placement="bottom" title="Visit User" target="_blank" ><i style="font-size: medium" class="fa fa-user" aria-hidden="true"></i>--}}
                                {{--</a></li>--}}
                        {{--<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Notification"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span><span class="navbar-new">5</span></a></li>--}}
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('/profile')}}">{{\Illuminate\Support\Facades\Auth::user()->name}}</a></li>
                                <li><a href="{{url('/logout')}}">logout</a></li>
                                {{--<li><a href="#">Something else here</a></li>--}}
                                <li role="separator" class="divider"></li>
                                <li><a href="{{url('/home')}}">View as user</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{url('/')}}">Visit site</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>










        <a href="#menu-toggle" id="menu-toggle"><i class="material-icons">menu</i></a>
            @yield('content')
    </div>
    <!-- /#page-content-wrapper -->







</div>
<!-- /#wrapper -->




<!-- Bootstrap JS -->
{{--<script src="{{asset('js/bootstrap.min.js')}}"></script>--}}
<script href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

<!-- Jasny Bootstrap JS
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
-->
<!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
<script src="{{asset('js/plugins/jquery.min.js')}}"></script>
{{--<script src="{{asset('js/all.js')}}"></script>--}}
<!-- Include all compiled plugins (below), or include individual files as needed -->
{{--<script src="{{asset('js/plugins/video.js')}}"></script>--}}
<script src="{{asset('js/flat-ui.min.js')}}"></script>

<!-- JQuery Pie Chart -->
{{--<script src="{{asset('js/plugins/jquery.easypiechart.min.js')}}s"></script>--}}

<script src="{{asset('js/script.js')}}"></script>

{{--<script src="{{asset('js/all.js')}}"></script>--}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.0/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.0/jquery-confirm.min.js"></script>
@if(Session::has('create'))
    <script>

        $.confirm({
            title: 'Congratulation!',
            content: 'Created Successfully',
            type: 'green',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'Thank You',
                    btnClass: 'btn-green',
                    action: function(){
                    }
                },
                close: function () {
                }
            }
        });
    </script>
@endif
@if(Session::has('update'))
    <script>
        $.confirm({
            title: 'Congratulation!',
            content: 'Updated Successfully',
            type: 'purple',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'Thank You',
                    btnClass: 'btn-purple',
                    action: function(){
                    }
                },
                close: function () {
                }
            }
        });
    </script>
@endif
@if(Session::has('delete'))
    <script>
        $.confirm({
            title: 'Congratulation!',
            content: 'delete Successfully',
            type: 'red',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'Thank You',
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
<script>
    document.addEventListener('contextmenu', event => event.preventDefault());

    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script>
    $("#photo_id").change(function(){
        readURL(this);
    });
$('.preventDefault').click(function (e) {
    e.preventDefault();
});
    $(function() {
        $('#MainMenu > li').click(function(e) {
            e.stopPropagation();
            var $el = $('ul',this);
            $('#MainMenu > li > ul').not($el).slideUp();
            $el.stop(true, true).slideToggle(400);
            $.toggleClass('sub-menu');
        });
        $('#MainMenu > li > ul > li').click(function(e) {
            e.stopPropagation();
            var $el = $('ul',this);
            $('#MainMenu > li > ul > li >ul').not($el).slideUp();
            $el.stop(true, true).slideToggle(400);
            $.toggleClass('recharges');
        });
        $('#MainMenu > li > ul > li').click(function(e) {
            e.stopImmediatePropagation();
        });
    });
//    $(document).ready(function() {
//        $( '.dropdown' ).hover(
//            function(){
//                $(this).children('.sub-menu').slideDown(200);
//            },
//            function(){
//                $(this).children('.sub-menu').slideUp(200);
//            }
//        );
//    });
</script>
</body>
</html>
