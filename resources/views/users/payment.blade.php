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


                        <div class="col-lg-5 col-12">
                            {!! Form::open(['method'=>'POST','action'=>"UserContant@payments"]) !!}
                            <div class="input-group">
                                <input type="text" class="form-control" name="number"
                                       aria-label="Text input with checkbox" placeholder="Card No" required>
                                <button type="submit" class="btn" style="height: 45px">Card</button>
                            </div>

                            {!! Form::close() !!}
                        </div>


                        <div class="col-lg-7 col-12">
                            {!! Form::open(['method'=>'POST','action'=>"UserContant@payments"]) !!}
                            <div class="input-group">
                                <input class="form-control" required="required" name="phone" placeholder="Mobile No"  type="text">
                                <input type="text" class="form-control" placeholder="Transection ID" required>
                                <button type="submit" class="btn" style="height: 45px">bKash</button>
                            </div>
                            {!! Form::close() !!}

                        </div>


                    </div>

                    @if(Session::has('invalid'))
                        <script>
                            $.confirm({
                                title: '<i class="fa fa-exclamation-triangle" style="color: red" aria-hidden="true"> &nbsp; Sorry!</i>',
                                content: '<strong>Invalid Card Sequence <br><small>Call 8585 for help</small> </strong>',
                                type: 'red',
                                typeAnimated: true,
                                buttons: {
                                    tryAgain: {
                                        text: 'Try again',
                                        btnClass: 'btn-red',
                                        action: function () {
                                        }
                                    },
                                    close: function () {
                                    }
                                }
                            });
                        </script>
                    @endif

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