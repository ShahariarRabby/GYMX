@extends('layouts.admin')
@section('header')
    Create Payment
@endsection
@section('content')
    {!! Form::open(['method'=>'POST','action'=>"AdminPaymentController@store",'files'=>true]) !!}


    <div class="col-sm-4 col-12">

        @include('includes.form_errors')
        <div class="form-group ">
            {!! Form::label('User Id','User Id: ',['style'=>'margin-right : 20px']) !!}
            {!! Form::select('user_id',[''=>'Choose Option']+$user,null,['class'=>'form-control','style'=>'height: 45px','required'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('Credit','Credit: ',['style'=>'margin-right : 20px']) !!}
            {!! Form::number('Credit',null,['class'=>'form-control col-2']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Debit','Debit: ',['style'=>'margin-right : 20px']) !!}
            {!! Form::number('Debit',null,['class'=>'form-control col-2']) !!}
        </div>

        <div class="form-group col-4">
            {!! Form::label('Type','Comments: ',['class'=>'Col']) !!}
            {!! Form::text('Type',null,['class'=>'form-control col-2','required' ]) !!}

        </div>



        <div class="form-group  col-sm-6">
            {!! Form::submit('Create Payment',['class'=>'btn btn-primary   col-sm-11']) !!}
        </div>



        {!! Form::Close() !!}



    </div>
@endsection