{{--@extends('layouts.users)--}}
{{--@section('userSummery')--}}
{{--{!! Form::model($user,['method'=>'PATCH','action'=>["AdminUsersController@update"],'files'=>true]) !!}--}}

<?php
use Carbon\Carbon;
$user = Auth::User();
$date2 = Carbon::now();
$date2->modify('-1 seconds');
$result2 = \App\Profile::Where('discontinued','<=',$date2)->get();
// echo $resultaCT = \App\Profile::Where('discontinued','>=',$now)->get();
foreach ($result2 as $result2){
    $result3 =  $result2['id'];
    $update['is_active']= 'Not Active';
    $notactive = \App\User::whereProfile_id($result3)->update($update);
}
?>

<style>


    .none{
        display: none;
    }
    #dash{
        display: block;
    }
</style>


<div class="row userprofile">
    <div class="col-lg-3 col-md-3 col-12 usersummery">
        <div class="spacer">
            <div class="row usersmr">
                <div class="col-12 img">
                    <img class="userimg blah" id="blah"   src="{{asset(Auth::user()->photo ? ("images/".(Auth::user()->photo->file)):"images/picture-default.png")}}" alt="{{Auth::User()->name}}">
                </div>
                <div class="col-12 buttons">
                    <a href="{{url('users/'.$user->id.'/edit')}}"><button class="" id="edit">Edit</button></a>
                </div>
            </div>

            <div class="row reating">
                <div class="col-12">
                    <h4>{{$user->name}}</h4>
                    <p>Bio: {{$user->profile->bio}} </p>
                </div>

                <div class="col-12">
                    <div class="tabeldata">
                        <table class="table table-striped table-hover" id="table">
                            <tbody>
                            <tr>
                                <td style="">Status</td>
                                <td><span class="label label-success">{{$user->is_active}}</span></td>
                            </tr>
                            <tr>
                                <td>Package</td>
                                <td><span class="label label-success">{{$user->profile->package->name}}</span></td>
                            </tr>
                            <tr>
                                <td>Member Since</td>
                                <td>
                                <?php
                                $user1 = \Illuminate\Support\Facades\Auth::user();
                                $date = date_create($user1->created_at);
//                                $date = date_add($date, date_interval_create_from_date_string('2 days'));
                                echo date_format($date, 'd-m-y');

//                                use Carbon\Carbon;
//                                $user1 = \Illuminate\Support\Facades\Auth::user();
//                              echo      $user1 = $user1->created_at->toDateTimeString();
//                                $user1 = Carbon::now();

//                                $newYearPST = $user1 ->toFormattedDateString();
                                        ?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{!! Form::Close() !!}
