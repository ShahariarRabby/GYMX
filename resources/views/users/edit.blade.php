@extends('layouts.users')
@section('tabs1')
    <div id="tabs-1">
    {!! Form::model($profile,['class'=>"container about",'method'=>'PATCH','action'=>["UsersControler@update",$user->id]]) !!}

    {{--{!! Form::open(['method'=>'POST','action'=>"AdminUsersController@store",'class'=>"container about",'files'=>true]) !!}--}}
    {{--<form class="container about">--}}
    {{----}}
    <div class="row userhead">

        <div class="htag">
            <h3 class=""><i class="fa fa-user-circle-o" aria-hidden="true"></i> Profile</h3>
            <button class="btn ">Submit</button>
            <a  class="btn" href="{{url('users/create')}}">View</a>
        </div>
    </div>




    <div class="row userheaddetails">
        <div class="container ">
            <div method="" action="" class="row ">

                <div class="col-lg-6 col-md-6 col-12">
                    <div class=" row form-group">
                        <lable class="col-5 col-form-label">
                            Name:
                        </lable>
                        <div class="col-7">
                            {!! Form::text('name',$user->name,['class'=>'form-control', 'required']) !!}
                        </div>
                    </div>




                    <div class="row form-group">
                        <lable class="col-5 col-form-label">
                            Height:
                        </lable>
                        <div class="col-7">
                            {!! Form::number('height',null,['class'=>'form-control','required']) !!}

                            {{--<input class="form-control" type="number_format" name="height" value="" id="" required>--}}
                        </div>
                    </div>


                    <div class="row form-group">
                        <lable class="col-5 col-form-label">
                            Weight:
                        </lable>
                        <div class="col-7">
                            {!! Form::number('weight',null,['class'=>'form-control','required']) !!}

                            {{--<input class="form-control" type="number_format" name="weight" value="" id="" required>--}}
                        </div>
                    </div>

                    {{--<div class="row form-group">--}}
                    {{--<lable class="col-5 col-form-label">--}}
                    {{--Birthday:--}}
                    {{--</lable>--}}
                    {{--<div class="col-7">--}}
                    {{--<input class="form-control" type="date" name="dob" value="" id="" required>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    <div class="row form-group">
                        <lable class="col-5 col-form-label">
                            Gender:
                        </lable>
                        <div class="col-7">
                            <select class="form-control" name="gender" id="exampleSelect1">
                                <option value="0">I don't know</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <lable class="col-5 col-form-label">
                            Facebook:
                        </lable>
                        <div class="col-7">
                            {!! Form::text('facebook',null,['class'=>'form-control','required']) !!}
                        </div>
                    </div>



                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group row">
                        {!! Form::label('password','Password',['class' => 'col-5 col-form-label']) !!}
                        <div class="col-7">
                            {!!  Form::password('password', ['class' => 'form-control','id'=>'password','required']) !!}

                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('password','Confirm Password',['class' => 'col-5 col-form-label']) !!}
                        <div class="col-7">

                            {!!  Form::password('confirm_password', ['class' => 'form-control','id'=>'confirm_password','required']) !!}

                        </div>
                        <spam id="message"></spam>
                    </div>





                    <div class="row form-group">
                        <lable class="col-5 col-form-label">
                            Blood Group:
                        </lable>
                        <div class="col-7">
                            {!! Form::text('bloodGroup',null,['class'=>'form-control','required']) !!}

                        </div>
                    </div>


                    <div class="row form-group">
                        <lable class="col-5 col-form-label">
                            BMI:
                        </lable>
                        <div class="col-7">
                            <input class="form-control" type="number" value="2.22" id="" disabled>
                        </div>
                    </div>

                    <div class="row form-group">
                        <lable class="col-5 col-form-label">
                            Phone:
                        </lable>
                        <div class="col-7">
                            {!! Form::text('phone',null,['class'=>'form-control','required']) !!}

                            {{--<input class="form-control" name="phone" type="tel" value="" id="example-tel-input" required>--}}
                        </div>
                    </div>
                </div>

            </div>
            <!--****************************************************************-->


            <!--****************************************************************-->

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




        </div>
    </div>
    {!! Form::close() !!}

    {{--if(isset($_GET['source'])){--}}
    {{--$source= $_GET['source'];--}}
    {{--switch($source){--}}
    {{--case 1:--}}
    {{--include "userpartial/edituser.php" ;--}}
    {{--break;               --}}
    {{--default:--}}
    {{--include "userpartial/showuser.php" ;--}}
    {{--break;--}}
    {{--} --}}
    {{--}else{--}}
    {{--include "userpartial/showuser.php" ;--}}
    {{--}--}}


    </div>



@endsection