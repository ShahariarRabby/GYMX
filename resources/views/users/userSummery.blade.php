{{--@extends('layouts.users)--}}
{{--@section('userSummery')--}}
{{--{!! Form::model($user,['method'=>'PATCH','action'=>["AdminUsersController@update"],'files'=>true]) !!}--}}

<?php
$user = Auth::User();
        ?>
<div class="row userprofile">
    <div class="col-lg-3 col-md-3 col-12 usersummery">
        <div class="spacer">
            <div class="row usersmr">
                <div class="col-12 img">
                    <img class="userimg"    src="{{asset(Auth::User()->photo ? ("images/".(Auth::User()->photo->file)):(Auth::User()->profile->gender=="Male"?"images/2.png":"images/1.png"))}}" alt="{{Auth::User()->name}}">
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
                                <td><span class="label label-success">{{$user->is_active}}</span></td>
                            </tr>
                            <tr>
                                <td>Member Since</td>
                                <?php
                                use Carbon\Carbon;
                                $user1 = \Illuminate\Support\Facades\Auth::user();
                                    $user1 = $user1->created_at->toDateTimeString();
                                $user1 = Carbon::now();

                                $newYearPST = $user1 ->toFormattedDateString();
                                        ?>
                                <td> {{$newYearPST}} </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{!! Form::Close() !!}

    {{--@endsection--}}