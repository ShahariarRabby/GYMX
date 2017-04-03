@extends('layouts.admin')
@section('header')
    Edit Payment
@endsection
@section('content')
    {!! Form::model($payment,['method'=>'PATCH','action'=>["AdminPaymentController@update",$payment->id]]) !!}


    <div class="col-md-6 col-12">

        @include('includes.form_errors')
        <div class="form-group ">
            {!! Form::label('User Id','User Id: ',['style'=>'margin-right : 20px']) !!}
            {!! Form::number('user_id',null,['class'=>'form-control ']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Credit','Credit: ',['style'=>'margin-right : 20px']) !!}
            {!! Form::number('Credit',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Debit','Debit: ',['style'=>'margin-right : 20px']) !!}
            {!! Form::number('Debit',null,['class'=>'form-control ']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Balance','Balance: ',['style'=>'margin-right : 20px']) !!}
            {!! Form::number('Balance',null,['class'=>'form-control ']) !!}
        </div>

        <div class="form-group ">
            {!! Form::label('Type','Status: ',['class'=>'Col']) !!}
            {!! Form::text('Type',null,['class'=>'form-control']) !!}

        </div>



        <div class="form-group  col-sm-6"style="padding: 0">
            {!! Form::submit('Update Payment',['class'=>'btn btn-primary col-sm-12']) !!}
        </div>



        {!! Form::Close() !!}

        {!! Form::open(['method'=>'Delete','action'=>["AdminPaymentController@destroy",$payment->id]]) !!}


        <div class="form-group  col-sm-6" style="padding: 0">
            {!! Form::submit('Delete Payment',['class'=>'btn btn-danger col-sm-12']) !!}
        </div>
        {!! Form::Close() !!}
    </div>
@endsection