<h4 class="alert-heading" style="color:red !important;">Attention!</h4>
<span class="badge badge-danger" style="padding: 15px;width: 100%;font-size: 15px">
<?php
    use Carbon\Carbon;
    $discontinued =  \Illuminate\Support\Facades\Auth::user()->profile->discontinued;
    $now =Carbon::now();
    $discontinued=  Carbon::parse($discontinued);
    $discontinued = $discontinued->diffInSeconds($now);
    $var = 31536000;
    $year = $discontinued/$var;
    $main = $discontinued%$var;
    $month = $main/(86400*30);
    $main = $main%(86400*30);
    $day = $main/(86400);
    $main = $main%(86400);
    $hour = $main/(3600);
    $main = $main%(3600);
    $min = $main/(60);
    $sec = $main%(60);
    $year = floor($year);
    $month = floor($month);
    $day = floor($day);
    $hour = floor($hour);
    $min = floor($min);
    if($year!=0){
        echo $year . " year ";
    }
    if($month!=0){
        echo $month . " month ";
    }
    if($day!=0){
        echo $day . " days ";
    }
    if($hour!=0){
        echo $hour . " hour ";
    }
    if($min !=0){
        echo $min . " minutes ";
    }
    if($sec!=0){
        echo $sec . " seconds ";
    }
    ?>
 </span>
remaining to disconnect. Please recharge account and schedule next connectivity to avoid disconnection.