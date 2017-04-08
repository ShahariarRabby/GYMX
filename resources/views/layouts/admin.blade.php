<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

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
    <![endif]-->

</head>

<body id="admin-page">

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin: 0;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('admin')}}">Dashboard</a>
        </div>

        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <li class="dropdown">

                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                         <i class="fa fa-user fa-fw"></i>
                         {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                <ul class="dropdown-menu dropdown-user">
                    <li><a href="{{url('/home')}}"><i class="fa fa-user fa-fw"></i> View as user</a>
                    </li>
                    <li><a href="{{url('/')}}"><i class="fa fa-gear fa-fw"></i> Go to Site</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    {{--<li class="sidebar-search">--}}
                        {{--<div class="input-group custom-search-form">--}}
                            {{--<input type="text" class="form-control" placeholder="Search...">--}}
                            {{--<span class="input-group-btn">--}}
                                {{--<button class="btn btn-default" type="button">--}}
                                    {{--<i class="fa fa-search"></i>--}}
                                {{--</button>--}}
                            {{--</span>--}}
                        {{--</div>--}}
                        {{--<!-- /input-group -->--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="/admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>--}}
                        {{--<a href="{{ url('/admin/home')}}"><i class="fa fa-dashboard  fa-fw"></i> DashBord</a>--}}


                    {{--</li>--}}
                    <li>

                        <a href="{{ url('admin/users')}}"><i class="fa fa-users" aria-hidden="true"></i>
                            Users<span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('admin/user/details')}}"><i class="fa fa-pie-chart" aria-hidden="true"></i>
                                     User Summery</a>
                            </li>
                            <li>
                                <a href="{{ url('admin/users/')}}"><i class="fa fa-address-book" aria-hidden="true"></i>
                                     All Users</a>
                            </li>
                            <li>
                                <a href="{{ url('admin/users/create')}}"><i class="fa fa-id-card" aria-hidden="true"></i>
                                     Create User</a>
                            </li>
                            <li>
                                <a href="{{route('discontinue.index')}}"><i class="fa fa-frown-o" aria-hidden="true"></i>
                                     Discountable User</a>
                            </li>
                            <li>
                                <a href="{{url('admin/discontinued')}}"><i class="fa fa-times" aria-hidden="true"></i>
                                     Disconnected User</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

{{--=============Multilable=========================--}}
                    <li>



                        <a href="{{route('payment.index')}}"><i class="fa fa-money fa-fw"></i>

                            Payments<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('admin/payments/details')}}"><i class="fa fa-pie-chart" aria-hidden="true"></i>
                                    Payment Summery</a>
                            </li>
                            <li>
                                <a href="{{route('payment.index')}}"><i class="fa fa-money" aria-hidden="true"></i>

                                    Payments<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="{{route('payment.index')}}">All Payments</a>
                                    </li>
                                    <li>
                                        <a href="{{route('payment.create')}}">Create Payment</a>
                                    </li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                            {{--<li>--}}
                                {{--<a href="{{ url('admin/bkash')}}">Bkash<span class="fa arrow"></span></a>--}}
                                {{--<ul class="nav nav-third-level">--}}
                                    <li>
                                        <a href="{{ url('admin/bkash')}}"><img src="{{asset('images/bkash.jpg')}}" style="height: 15px" aria-hidden="true"></img>
                                            Bkash</a>
                                    </li>
                                {{--</ul>--}}
                                {{--<!-- /.nav-third-level -->--}}
                            {{--</li>--}}
                            <li>
                                <a href="{{ url('admin/card')}}"><i class="fa fa-credit-card" aria-hidden="true"></i>
                                    Card<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="{{ url('admin/card')}}">All Cards</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('admin/card/create')}}">Add Card</a>
                                    </li>

                                </ul>
                                <!-- /.nav-third-level -->
                            </li>


                        </ul>
                        <!-- /.nav-second-level -->
                    </li>


{{--============================================--}}
                    {{--<li>--}}
                        {{--<a href="#"><i class="fa fa-wrench fa-fw"></i>Bkash<span class="fa arrow"></span></a>--}}
                        {{--<ul class="nav nav-second-level">--}}
                            {{--<li>--}}
                                {{--<a href="{{ url('admin/bkash')}}">Bkash</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="buttons.html">Create Post</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--<!-- /.nav-second-level -->--}}
                    {{--</li>--}}


                    {{--<li>--}}
                        {{--<a href="{{route('payment.index')}}"><i class="fa fa-money" aria-hidden="true"></i>--}}

                            {{--Payments<span class="fa arrow"></span></a>--}}
                        {{--<ul class="nav nav-second-level">--}}
                            {{--<li>--}}
                                {{--<a href="{{route('payment.index')}}">All Payments</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="{{route('payment.create')}}">Create Payment</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--<!-- /.nav-second-level -->--}}
                    {{--</li>--}}

                    <li>
                        <a href="{{route('package.index')}}"><i class="fa fa-sitemap fa-fw"></i> Packages<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('package.index')}}">All Packages</a>
                            </li>
                            <li>
                                <a href="{{route('package.create')}}">Create Package</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li>
                        <a href="{{ url('admin/task')}}"><i class="fa fa-tasks fa-fw"></i> Tasks<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
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
                        <a href="{{ url('admin/chat')}}"><i class="fa fa-envelope fa-fw"></i> Message</a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        @yield('header')
                    </h1>
                    @yield('content')
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->

<script src="{{asset('js/all.js')}}"></script>
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
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#photo_id").change(function(){
        readURL(this);
    });

</script>
</body>

</html>
