@extends('layouts.users')
@section('title')
    Payments
@endsection
@section('tabs1')

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
                    <div class="widget-title">
                        <h5>Current Balance: {{$balance}} Taka</h5>

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
                            @foreach($paymentTable as $paymentTable)
                                <tr>
                                    <td class="b">{{$paymentTable->Type}}</td>
                                    <td class="text-right">{{$paymentTable->Debit}}</td>
                                    <td class="text-right">{{$paymentTable->Credit}}</td>
                                    <td class="text-right">{{$paymentTable->Balance}}</td>
                                    <td>
                                        <?php
                                        $defaultTimeZone = 'UTC';
                                        $date = date_create($paymentTable->created_at);
                                        echo date_format($date, 'l d-m-y');
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