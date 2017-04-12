@extends('layouts.users')
@section('title')
    {{$user->name}}
@endsection
@section('userSummery')


    <div  class="row userprofile">
        <div id="userprofile" class="col-lg-3 col-md-3 col-12 usersummery" style="display: block !important;">
            <div class="spacer">
                <div class="row usersmr">
                    <div class="col-12 img">
                        <img class="userimg blah" id="blah"   src="{{asset($user->photo ? ("images/".($user->photo->file)):"images/picture-default.png")}}" alt="{{$user->name}}">
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
                                        $user1 = $user;
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





    @endsection
@section('tabs1')

    <div id="tabs-1">

        <style>
            .padding{
                padding-top: 15px !important;
            }
            .userdetails{
                padding-top: 10px;
                padding-bottom: 10px;
                margin-bottom: 10px;
                border-bottom: 1px solid #eee;        }

            #dash{
                display: none;
            }
            /*#pro{*/
                /*display: block;*/
            /*}*/
            /*#userprofile{*/
                /*display: block;*/
            /*}*/

        </style>


        <div class="container about">
            <div class="row userhead">

                <div class="htag">
                    <h3 class=""><i class="fa fa-user-circle-o" aria-hidden="true"></i>{{$user->name}}</h3>
                </div>
            </div>
            <div class="row userdetails">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="row padding">
                        <lable class="col-5 ">
                            Name:
                        </lable>
                        <div class="col-7 ">{{$user->name}}</div>
                    </div>




                    {{--<div class="row padding">--}}
                    {{--<lable class="col-5">--}}
                    {{--Birthday:--}}
                    {{--</lable>--}}
                    {{--<div class="col-7">Your name</div>--}}
                    {{--</div>--}}

                    <div class="row padding">
                        <lable class="col-5">
                            Gender:
                        </lable>
                        <div class="col-7">{{$user->profile->gender}}</div>
                    </div>

                    <div class="row padding">
                        <lable class="col-5">
                            Height:
                        </lable>
                        <div class="col-7">{{$user->profile->height}}</div>
                    </div>

                    <div class="row padding">
                        <lable class="col-5">
                            Weight:
                        </lable>
                        <div class="col-7">{{$user->profile->weight}}</div>
                    </div>

                    <div class="row padding">
                        <lable class="col-5">
                            Age:
                        </lable>
                        <div class="col-7">{{$age}}</div>
                    </div>

                    <div class="row padding">
                        <lable class="col-5">
                            BMI:
                        </lable>
                        <div class="col-7">{{$BMI}}
                            @if($BMI < 18.5)
                                <span >(Underweight)<i class="fa fa-exclamation-triangle"  style='color: red; margin-left: 5px;' aria-hidden="true"></i></span>
                            @elseif($BMI >18.5 && 25> $BMI)
                                <span >(Normal weight)<i class="fa fa-thumbs-up" style='color: green; margin-left: 5px;' aria-hidden="true"></i></span>
                            @elseif($BMI > 24.9 && 30 > $BMI)
                                <span>(Overweight)<i class="fa fa-exclamation-triangle"  style='color: red; margin-left: 5px;' aria-hidden="true"></i></i></span>
                            @else
                                <span>(Obesity)<i class="fa fa-exclamation-triangle"  style='color: red; margin-left: 5px;' aria-hidden="true"></i></span>
                            @endif
                            <a href="http://www.calculator.net/calorie-calculator.html">Calorie information</a>
                        </div>
                    </div>


                </div>

                <div class="col-lg-6 col-md-6 col-12">

                    {{--<div class="row padding">--}}
                    {{--<lable class="col-5">--}}
                    {{--Last Name:--}}
                    {{--</lable>--}}
                    {{--<div class="col-7">Your name</div>--}}
                    {{--</div>--}}


                    <div class="row padding">
                        <lable class="col-5">
                            User Email:
                        </lable>
                        <div class="col-7">{{$user->email}}</div>
                    </div>

                    <div class="row padding">
                        <lable class="col-5">
                            Package:
                        </lable>
                        <div class="col-7">{{$user->profile->package->name}}</div>
                    </div>




                    <div class="row padding">
                        <lable class="col-5">
                            Blood Group:
                        </lable>
                        <div class="col-7">{{$user->profile->bloodGroup}}</div>
                    </div>





                    <div class="row padding">
                        <lable class="col-5">
                            Phone:
                        </lable>
                        <div class="col-7">{{$user->profile->phone}}</div>
                    </div>

                    <div class="row padding">
                        <lable class="col-5">
                            Facebook:
                        </lable>
                        <div class="col-7">{{$user->profile->facebook}}</div>
                    </div>


                    <div class="row padding">
                        <lable class="col-5">
                            Location:
                        </lable>
                        <div class="col-7">Dhaka</div>
                    </div>




                </div>



            </div>
            <!--****************************************************************-->





        </div>

    </div>

@endsection