@extends('layouts.users')
@section('title')
    Payments
@endsection
@section('userSummery')
    @include('users.userSummery')
@endsection
@section('tabs1')

    <style>


         #dash{
            display: none;
        }
        #pay{
            display: block;
        }
    </style>
    <div id="tabs-4">
        <div class="container">
            <div class="row">
                <div class="col-12 recharge">
                    <h5>Recharge Balance</h5>




                    <div class="row">


                        <div class="col-lg-4 col-12">
                            {!! Form::open(['method'=>'POST','action'=>"UserContant@payments"]) !!}
                            <div class="input-group">
                                <input type="text" class="form-control" name="number" placeholder="Card No" required>
                                <button type="submit" class="btn" style="height: 45px">Card</button>
                            </div>

                            {!! Form::close() !!}
                        </div>


                        <div class="col-lg-8 col-12">
                            {!! Form::open(['method'=>'POST','action'=>"UserContant@paymentsbKash"]) !!}
                            <div class="input-group row">
                                <input type="text" class="form-control col-md-2 col-4" name="amount" placeholder="Amount" required>
                                <input type="text" class="form-control col-md-5 col-4" name="phone" placeholder="Mobile No" required>
                                <input type="text" class="form-control col-md-5 col-4" name="t_id" placeholder="Transection ID" required>

                                <button type="submit" class="btn" style="height: 45px">bKash</button>
                            </div>
                            {!! Form::close() !!}

                        </div>


                    </div>



                </div>




                <div class="col-12">


                    {{--{!! Form::model($package,['method'=>'PATCH','action'=>["UserContant@enablePackage"]]) !!}--}}
                    {!! Form::open(['method'=>'POST','action'=>"UserContant@enablePackage"]) !!}

                    <div class="widget-title row" style="padding-right: 18px;">

                        <h5 class="col-5">Current Balance: {{$balance}} Taka</h5>

                        <div class="form-group col-5" style="padding-right: 0px">
                            {!! Form::select('package_id',array(''=>'Choose option','2'=>'Starter (1month - 3000 taka)','3'=>'professional (1 Year - 30,000tk)'),null,['class'=>'form-control','style'=>'height: 45px','required']) !!}

                            {{--{!! Form::select('package_id',[''=>'Choose Option']+$package,null,['class'=>'form-control','style'=>'height: 45px','required'])!!}--}}

                            {{--{!! Form::select('role_id',array(''=>'Choose option','Admin'=>'Admin','User'=>'User'),$package,['class'=>'form-control','style'=>'height: 45px']) !!}--}}
                        </div>
                        <div id="enablePackBtn" class="form-group col-2" style="padding-left: 0px">
                            <style>
                               #enablePackBtn .btn {
                                    background: #1fae66;
                                    color: white;
                                    -webkit-transition: background 1s, box-shadow .5s;
                                    transition: background 1s, box-shadow .5s;
                                }
                               #enablePackBtn  .btn:hover {
                                    background: #17834d;
                                    box-shadow: 0px 1px 8px gray;
                                }

                            </style>
                            <button type="submit" class="btn" style="height: 45px">Enable Pack</button>
                    </div>


                    </div>
                    {!! Form::Close() !!}
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
                            @foreach($paymentTable as $paymentTable)
                                <tr>
                                    <td class="text-center">{{$paymentTable->Type}}</td>
                                    <td class="text-center">{{$paymentTable->Debit}}</td>
                                    <td class="text-center">{{$paymentTable->Credit}}</td>
                                    <td class="text-center">{{$paymentTable->Balance}}</td>
                                    <td>
                                        <?php
                                        $date = $paymentTable->created_at;
                                        $date= Carbon\Carbon::parse($date);
                                        $date= date_create($date);
                                        echo date_format($date,"D H:i dMY");
                                        ?>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection