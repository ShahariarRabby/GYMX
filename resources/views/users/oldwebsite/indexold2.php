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
        <link rel="stylesheet" href="sass/style.css">

    </head>

    <body>
        <header>


            <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
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
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>

         
                
                 <div class="col-2 sidebar" id="sidebar">
                <ul class="sidebarmanu">
                    <li>
                        <div class="card">
                            <a href="">
                                <div class="cardimg"><img class="card-img-top" src="img/year-1.jpg" alt="Card image cap"></div>
                            </a>





                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </li>
                    <li><a href=""><i class="fa fa-user-circle" aria-hidden="true"></i><span>Account Setting</span></a></li>
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

               

            <div class="bg-faded" id="anm">
                <a href="">&nbsp;</a>
            </div>


        </header>

        <div class="container">

            <div class="row userprofile">






                <div class="col-lg-3 col-md-3 col-12 usersummery">
                    <div class="spacer">
                        <div class="row usersmr">
                            <div class="col-12 img">
                                <img class="userimg" src="img/year-1.jpg" alt="">
                            </div>
                            <div class="col-12 buttons">
                                <button class="" id="msg">xx</button>
                                <button class="" id="edit">xx</button>
                            </div>
                        </div>

                        <div class="row reating">
                            <div class="col-12">
                                <h1>Name is name is name</h1>
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



                <div class="col-lg-9 col-md-8 col-12" id="usercotent">
                    <div class="spacer">
                        <div id="tabs">
                            <ul class="tabmanu">
                                <li><a href="#tabs-5">Dashbord<span class="menu-active"><i class="fa fa-caret-up"></i></span></a></li>

                                <li><a href="#tabs-1">Profile<span class="menu-active"><i class="fa fa-caret-up"></i></span></a></li>

                                <li><a href="#tabs-2">Tasks<span class="menu-active"><i class="fa fa-caret-up"></i></span></a></li>
                                <li><a href="#tabs-3">Membes<span class="menu-active"><i class="fa fa-caret-up"></i></span></a></li>
                                <li><a href="#tabs-4">Payment Hisory<span class="menu-active"><i class="fa fa-caret-up"></i></span></a></li>
                            </ul>



                            <div id="tabs-1">
<!--
                                <form class="container about">
                                    <div class="row userhead">

                                        <div class="htag">
                                            <h3 class=""><i class="fa fa-user-circle-o" aria-hidden="true"></i> Profile</h3>
                                            <button class="btn ">Submit</button>
                                        </div>
                                    </div>



                                    <div class="row userheaddetails">
                                        <div class="container ">
                                            <div method="" action="" class="row ">

                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <div class=" row form-group">
                                                        <lable class="col-5 col-form-label">
                                                            First Name:
                                                        </lable>
                                                        <div class="col-7">

                                                            <input class="form-control" type="name" name="" value="" id="example-text-input">

                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <lable class="col-5 col-form-label">
                                                            User Name:
                                                        </lable>
                                                        <div class="col-7">                                                            <input class="form-control" type="name" value="Username" id="" disabled>
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <lable class="col-5 col-form-label">
                                                            Height:
                                                        </lable>
                                                        <div class="col-7"><input class="form-control" type="number_format" value="" id="" required></div>
                                                    </div>


                                                    <div class="row form-group">
                                                        <lable class="col-5 col-form-label">
                                                            Weight:
                                                        </lable>
                                                        <div class="col-7"><input class="form-control" type="number_format" value="" id="" required></div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <lable class="col-5 col-form-label">
                                                            Birthday:
                                                        </lable>
                                                        <div class="col-7"><input class="form-control" type="date" value="" id="" required></div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <lable class="col-5 col-form-label">
                                                            Gender:
                                                        </lable>
                                                        <div class="col-7">    <select class="form-control" id="exampleSelect1">
                                                            <option>Gender</option>
                                                            <option>Female</option>
                                                            <option>Male</option>
                                                            <option>I don't know</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <lable class="col-5 col-form-label">
                                                            Package:
                                                        </lable>
                                                        <div class="col-7"><input class="form-control" type="name" value="Package" id="" disabled></div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <lable class="col-5 col-form-label">
                                                            Facebook:
                                                        </lable>
                                                        <div class="col-7"><input class="form-control" type="url" value="fb.com/" id="" ></div>
                                                    </div>


                                                </div>
                                                <div class="col-lg-6 col-md-6 col-12">

                                                    <div class="row form-group">
                                                        <lable class="col-5 col-form-label">
                                                            Last Name:
                                                        </lable>
                                                        <div class="col-7"><input class="form-control" type="name" value="" id="" required></div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <lable class="col-5 col-form-label">
                                                            User Email:
                                                        </lable>
                                                        <div class="col-7"><input type="email" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="you@example.com" required></div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <lable class="col-5 col-form-label">
                                                            Password:
                                                        </lable>
                                                        <div class="col-7"><input type="password" class="form-control" id="inputPassword3" placeholder="Password"></div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <lable class="col-5 col-form-label">
                                                            Confirm Password:
                                                        </lable>
                                                        <div class="col-7"><input type="password" class="form-control" id="inputPasswordCon" placeholder="Password"></div>
                                                    </div>


                                                    <div class="row form-group">
                                                        <lable class="col-5 col-form-label">
                                                            Interest:
                                                        </lable>
                                                        <div class="col-7"><input class="form-control" type="text" value="" id="" required></div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <lable class="col-5 col-form-label">
                                                            Blood Group:
                                                        </lable>
                                                        <div class="col-7"><input class="form-control" type="text" value="" id="" required></div>
                                                    </div>


                                                    <div class="row form-group">
                                                        <lable class="col-5 col-form-label">
                                                            BMI:
                                                        </lable>
                                                        <div class="col-7"><input class="form-control" type="number" value="2.22" id="" disabled></div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <lable class="col-5 col-form-label">
                                                            Phone:
                                                        </lable>
                                                        <div class="col-7"> <input class="form-control" type="tel" value="" id="example-tel-input" required></div>
                                                    </div>
                                                </div>                   

                                            </div>
-->
 <!--****************************************************************-->                               
       

<form class="container about">
<div class="row userhead">

<div class="htag">
<h3 class=""><i class="fa fa-user-circle-o" aria-hidden="true"></i> Profile</h3>
<button class="btn ">Edit</button>
</div>
</div>
<div class="row userdetails">
<div class="col-lg-6 col-md-6 col-12">
<div class="row">
<lable class="col-5">
First Name:
</lable>
<div class="col-7">Your name</div>
</div>
<div class="row">
<lable class="col-5">
User Name:
</lable>
<div class="col-7">Your name</div>
</div>



<div class="row">
<lable class="col-5">
Birthday:
</lable>
<div class="col-7">Your name</div>
</div>

<div class="row">
<lable class="col-5">
Gender:
</lable>
<div class="col-7">Your name</div>
</div>

<div class="row">
<lable class="col-5">
Package:
</lable>
<div class="col-7">Your name</div>
</div>

<div class="row">
<lable class="col-5">
Facebook:
</lable>
<div class="col-7">Your name</div>
</div>


</div>

<div class="col-lg-6 col-md-6 col-12">

<div class="row">
<lable class="col-5">
Last Name:
</lable>
<div class="col-7">Your name</div>
</div>
<div class="row">
<lable class="col-5">
User Email:
</lable>
<div class="col-7">Your name</div>
</div>

<div class="row">
<lable class="col-5">
Blood:
</lable>
<div class="col-7">Your name</div>
</div>

<div class="row">
<lable class="col-5">
Interest:
</lable>
<div class="col-7">Your name</div>
</div>
<div class="row">
<lable class="col-5">
BMI:
</lable>
<div class="col-7">Your name</div>
</div>

<div class="row">
<lable class="col-5">
Phone:
</lable>
<div class="col-7">Your name</div>
</div>
</div>
</div>
<!--****************************************************************-->                               








                                            <div class="row expacv">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-7 col-12">
                                                            <div class="col-12">
                                                                <h3 class=""><i class="fa fa-file-text-o"></i> EXPERIENCE</h3></div>

                                                            <div class="col-12">
                                                                <ul>
     <!--****************************************************************-->
                                                                        <li class="expin" > <input class="form-control" type="tel" value="" id="" placeholder="Experience"></li>
    <!--****************************************************************-->                               
                                                               
                                                                    <li>Techer at XXX
                                                                        <br><small>March 1,2017 to now</small><i class="fa fa-trash-o" aria-hidden="true"></i>
                                                                    </li>


                                                                </ul>




                                                            </div>


                                                        </div>



                                                        <div class="col-lg-5 col-md-5 col-12">
                                                            <div class="col-12">
                                                                <h3 class=""><i class="fa fa-trophy mgr-10 profile-icon"></i> Achivement</h3></div>

                                                            <div class="col-12">
                                                                <ul>
<!--****************************************************************-->                           
                                                                    <li class="expin" > <input class="form-control" type="tel" value="" id="" placeholder="Achivement"></li>
 <!--****************************************************************-->                               
                                                                   
                                                                    <li>Techer at XXX
                                                                        <br><small>March 1,2017 to now</small></li>

                                                                </ul>




                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row actskill">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-7 col-12">
                                                            <div class="col-12">
                                                                <h3 class=""><i class="fa fa-globe"></i> ACTIVITY</h3> </div>
                                                            <div class="col-12">

                                                                <div class="acvscrole">
                                                                    <div>
                                                                        <h5>123</h5>
                                                                        <p>qqqqqqqqqq</p>
                                                                    </div>

                                                                    <div>
                                                                        <h5>123</h5>
                                                                        <p>qqqqqqqgggg1gggggggggggggggggggggggqqq11111gggggqqq11111111</p>
                                                                    </div>
                                                                    <div>
                                                                        <h5>123</h5>
                                                                        <p>qqqqqqqqqq</p>
                                                                    </div>
                                                                    <div>
                                                                        <h5>123</h5>
                                                                        <p>qqqqqqqqqq</p>
                                                                    </div>
                                                                    <div>
                                                                        <h5>123</h5>
                                                                        <p>qqqqqqqqqq</p>
                                                                    </div>
                                                                    <div>
                                                                        <h5>123</h5>
                                                                        <p>qqqqqqqqqq</p>
                                                                    </div>
                                                                    <div>
                                                                        <h5>123</h5>
                                                                        <p>qqqqqqqqqq</p>
                                                                    </div>
                                                                    <div>
                                                                        <h5>123</h5>
                                                                        <p>qqqqqqqqqq</p>
                                                                    </div>
                                                                    <div>
                                                                        <h5>123</h5>
                                                                        <p>qqqqqqqqqq</p>
                                                                    </div>
                                                                    <div>
                                                                        <h5>123</h5>
                                                                        <p>qqqqqqqqqq</p>
                                                                    </div>
                                                                    <div>
                                                                        <h5>123</h5>
                                                                        <p>qqqqqqqqqq</p>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="col-lg-5 col-md-5 col-12 bar">
                                                            <div class="col-12">
                                                                <h3 class=""><i class="fa fa-flask"></i> SKILL</h3>
                                                            </div>

                                                            <div class="col-12">
                                                                <h6>Weight Lift</h6>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>


                                                            <div class="col-12">
                                                                <h6>Weight Lift</h6>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>


                                                            <div class="col-12">
                                                                <h6>Weight Lift</h6>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>


                                                            <div class="col-12">
                                                                <h6>Weight Lift</h6>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>


                                                        </div>


                                                    </div>
                                                </div>
                                            </div>




                                        
                                </form>
                            </div>




                            <div id="tabs-2">
                                <div class="container">

                                    <div class="row">

                                        <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-bolt mgr-10 profile-icon"></i> Task</h3>

                                    </div>

                                    <div class="row">
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Logo / Photos</th>
                                                    <th>Start Date</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><img height="80" src="img/year-1.jpg" alt="example image"></td>
                                                    <td class="center">2017/02/03</td>
                                                    <td class="center">
                                                        <span class="label label-success">Finish</span>
                                                    </td>
                                                    <td class="menu-action rounded-btn">
                                                        <a class="btn menu-icon vd_bg-green">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a class="btn menu-icon vd_bg-yellow">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="btn menu-icon vd_bg-red">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div id="tabs-3">
                                <div class="container">
                                    <div class="row">
                                        <h3 class=""><i class="fa fa-users mgr-10 profile-icon"></i> Group Member</h3></div>
                                    <div class="row">

                                        <div class="col-lg-3 col-md-3 col-sm-3 col-2 membercard">
                                            <div class="member">
                                                <ul class="">
                                                    <li>
                                                        <a href="#">
                                                            <span class="menu-icon"><img src="img/year-1.jpg" alt="example image"></span>
                                                        </a>
                                                        <span class="menu-text"> name
                                                            <span class="menu-info">
                                                                <span class="menu-action">
                                                                    <span>
                                                                        <i class="fa fa-check"></i>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>



                                        </div>




                                    </div>
                                </div>




                            </div>





                            <div id="tabs-4">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 recharge">
                                            <h5>Recharge Balance</h5>
                                            <div class="row">
                                                <div class="col-lg-4 col-12">
                                                    <div class="input-group">

                                                        <span class="input-group-addon">
                                                            <label>Card</label>
                                                        </span>
                                                        <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="#####">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <label>bKash</label>
                                                        </span>
                                                        <input type="text" class="form-control" placeholder="Phone Number">
                                                        <input type="text" class="form-control" placeholder="Transection ID">
                                                        <button type="submit" class="btn">Submit</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="widget-title">
                                                <h5>Current Balance: 0 Taka</h5>

                                                <!--<span class="label label-info"></span>-->
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="">
                                                <table class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Type</th>
                                                            <th>Debit (Taka)</th>
                                                            <th>Credit (Taka)</th>
                                                            <th>Balance (Taka)</th>
                                                            <th>Time</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="b">Enable Package</td>
                                                            <td class="text-right">700</td>
                                                            <td class="text-right"></td>
                                                            <td class="text-right">0</td>
                                                            <td>Sat, 11 Mar, 2017 9:31 pm</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="b"> Card</td>
                                                            <td class="text-right"></td>
                                                            <td class="text-right">350</td>
                                                            <td class="text-right">700</td>
                                                            <td>Sat, 11 Mar, 2017 9:31 pm</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="b"> Card</td>
                                                            <td class="text-right"></td>
                                                            <td class="text-right">350</td>
                                                            <td class="text-right">350</td>
                                                            <td>Sat, 11 Mar, 2017 9:30 pm</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="b">Enable Package</td>
                                                            <td class="text-right">700</td>
                                                            <td class="text-right"></td>
                                                            <td class="text-right">0</td>
                                                            <td>Sat, 7 Jan, 2017 5:26 pm</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="b"> Card</td>
                                                            <td class="text-right"></td>
                                                            <td class="text-right">700</td>
                                                            <td class="text-right">700</td>
                                                            <td>Sat, 7 Jan, 2017 5:26 pm</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--*********Tab5****************************-->
                            <div id="tabs-5">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="container dashbord">
                                            <div class="row">
                                                <div class="col-12 col-sm-4">
                                                    <ul class="site-stats">
                                                        <li>
                                                            <div class="cc"><i class="fa fa-arrow-right"></i> <strong>Active</strong>
                                                                <br><small>My account status</small></div>
                                                        </li>

                                                        <li>
                                                            <div class="cc"><i class="fa fa-arrow-right"></i> <strong>Tue, 11 Apr, 2017 12:00 pm</strong>
                                                                <br><small>Disconnect date</small></div>
                                                        </li>
                                                        <!--<li class="divider"></li>-->

                                                        <li>
                                                            <div class="cc"><i class="fa fa-arrow-right"></i> <strong>0 Taka</strong>
                                                                <br><small>Current balance</small></div>
                                                        </li>

                                                        <li>
                                                            <div class="cc"><i class="fa fa-arrow-right"></i> <strong>1 Mbps</strong>
                                                                <br><small>Package</small></div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col-12 col-sm-8 dashdetails">
                                                    <div class=" marquee">
                                                        <div class="animtext">
                                                            Goodbye leazy life. let's CHALLENCGE YOURSELF!!!!
                                                        </div>
                                                    </div>


                                                    <div class="alert alert-danger alert-block">
                                                        <h4 class="alert-heading" style="color:red !important;">Attention!</h4>
                                                        <span class="badge badge-danger">24 days 10 hours 2 minitues</span> remaining to disconnect. Please recharge account and schedule next connectivity to avoid disconnection. </div>
                                                    <div class="alert alert-success alert-block">
                                                        Dear valued subscriber,
                                                        <br> To recharge your account and activate package please follow these steps:
                                                        <br> 1. Click "Payment". Put your scratch card no or bKash .
                                                        <br> 2. Click "Active".
                                                    </div>
                                                    <div class="alert alert-warning alert-block">
                                                        To avoid disconnection please recharge and activate package in advance before your account is being suspended. If suspended please call 8585.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>
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
        <script type="text/javascript" src="js/Countdown/demo/js/kinetic.js"></script>
        <script type="text/javascript" src="js/Countdown/jquery.final-countdown.js"></script>

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
        <script type="text/javascript" src="js/Countdown/demo/js/kinetic.js"></script>
        <script type="text/javascript" src="js/Countdown/jquery.final-countdown.js"></script>
        <script type="text/javascript">
            $('document').ready(function () {
                'use strict';
                $('.countdown').final_countdown({
                    'start': 1362139200,
                    'end': 1388461320,
                    'now': 1387461319
                });
            });
        </script>

        <script>
            $(function () {
                var $tabs = $("#tabs").tabs();

                $tabs.tabs({
                    hide: {
                        effect: "slide",
                        direction: "down",
                        duration: 500
                    },
                    show: {
                        effect: "slide",
                        direction: "up",
                        duration: 500
                    },
                    beforeActivate: function (event, ui) {
                        setTimeout(function () {
                            /* Do something after hide */
                            $tabs.animate({
                                top: "500px"
                            }, function () {
                                $tabs.animate({
                                    top: "0px"
                                })
                            });
                            $tabs.toggleClass('switch');
                        }, 500);
                    }
                });


                function getSelectedTabIndex() {
                    $tabIndex = $tabs.tabs('option', 'selected');
                    var $selected = $("#tabs ul>li a").eq($tabIndex).attr('href');
                    return $selected;
                }
            });
        </script>
    </body>

</html>