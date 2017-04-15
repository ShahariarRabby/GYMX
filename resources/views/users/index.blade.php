@extends('layouts.users')
@section('title')
    Home
@endsection
@section('userSummery')
    @include('users.userSummery')
@endsection
@section('tabs1')
    <div id="tabs-5">

        <div class="row">
            <div class="col-12">
                <div class="container dashbord">
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <ul class="site-stats">
                                <li>
                                    <div class="cc"><i class="fa fa-arrow-right"></i> <strong>{{$user->is_active }}</strong>
                                        <br><small>My account status</small></div>
                                </li>

                                <li>
                                    <?php
                                            ?>
                                    <div class="cc"><i class="fa fa-arrow-right"></i> <strong>
                                            <?php

                                            use Carbon\Carbon;$date = $user->profile->discontinued;
                                            $date = date_create($date);
                                            echo date_format($date, 'l d-m-y h:m A');

                               ?>

                                        </strong>
                                        <br><small>Disconnect date</small></div>
                                </li>
                                <!--<li class="divider"></li>-->

                                <li>
                                    <div class="cc"><i class="fa fa-arrow-right"></i> <strong>{{$balance}} Taka</strong>
                                        <br><small>Current balance</small></div>
                                </li>

                                <li>
                                    <div class="cc"><i class="fa fa-arrow-right"></i> <strong>{{$user->profile->package->name}}</strong>
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

                            {{--<script>--}}
                                {{--function loadUser() {--}}
                                    {{--$.get("/dis",function (data) {--}}
                                        {{--$(".xx").html(data);--}}

                                    {{--});--}}

                                {{--}--}}
                                {{--setInterval(function () {--}}
                                    {{--loadUser();--}}
                                {{--},900);--}}

                            {{--</script>--}}



                            <div class="alert alert-danger alert-block">
                                <h4 class="alert-heading" style="color:red !important;">Attention!</h4>
                                <span class="badge badge-danger" style="padding: 15px;width: 100%;font-size: 15px">
                                    <div id="getting-started"></div>
<script type="text/javascript">
    $("#getting-started")
        .countdown("{{$user->profile->discontinued}}", function(event) {
            $(this).text(
                event.strftime('%D days %H Hour %M Minutes %S Seconds')
            );
        });
</script>
<?php
//                                  $discontinued =  $user->profile->discontinued;
//                                  $now =Carbon::now();
//                                    $discontinued=  Carbon::parse($discontinued);
////
//                                    $discontinued = $discontinued->diffInSeconds($now);
//                                    $var = 31536000;
//
//
//                                  $year = $discontinued/$var;
//                                    $main = $discontinued%$var;
//                                     $month = $main/(86400*30);
//                                     $main = $main%(86400*30);
//                                    $day = $main/(86400);
//                                    $main = $main%(86400);
//                                    $hour = $main/(3600);
//                                    $main = $main%(3600);
//                                    $min = $main/(60);
//                                    $sec = $main%(60);
//
//
//                                    $year = floor($year);
//                                    $month = floor($month);
//                                    $day = floor($day);
//                                    $hour = floor($hour);
//                                    $min = floor($min);
//                                    if($year!=0){
//                                        echo $year . " year ";
//                                    }
//                                   if($month!=0){
//                                        echo $month . " month ";
//                                    }
//                                    if($day!=0){
//                                        echo $day . " days ";
//                                    }
//                                    if($hour!=0){
//                                        echo $hour . " hour ";
//                                    }
//                                    if($min !=0){
//                                        echo $min . " minutes ";
//                                    }
//                                    if($sec!=0){
//                                        echo $sec . " seconds ";
//                                    }
//?>
                                </span>
                                remaining to disconnect. Please recharge account and schedule next connectivity to avoid disconnection.
                            </div>



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

    @endsection