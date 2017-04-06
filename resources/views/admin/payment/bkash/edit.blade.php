@extends('layouts.admin')
@section('header')
    bKash
@endsection
@section('content')
    {!! Form::model($bkash,['method'=>'PATCH','action'=>["AdminBkashController@update",$bkash->id]]) !!}


    <div class="col-sm-4 col-12">

        @include('includes.form_errors')
        <div class="form-group ">
            {!! Form::label('Name','Name: ',['style'=>'margin-right : 20px']) !!}
            {!! Form::label('Name',$bkash->user->name) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Mobile','Mobile: ',['style'=>'margin-right : 20px']) !!}
            {!! Form::label('Mobile',$bkash->phone) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Transaction','Transaction Id: ',['style'=>'margin-right : 20px']) !!}
            {!! Form::label('Transaction',$bkash->t_id) !!}
        </div>
    <div class="form-group">
            {!! Form::label('Transaction','Transaction Id: ',['style'=>'margin-right : 20px']) !!}
            {!! Form::number('amount',null,['class'=>'form-control col-2']) !!}
        </div>

        <div class="form-group col-4">
            {!! Form::label('status','Status: ',['class'=>'Col']) !!}
            {!! Form::select('status',array(''=>'Choose option','Approved'=>'Approve','Waiting'=>'Waiting'),null,['class'=>'form-control col-2']) !!}
        </div>



        <div class="form-group  col-sm-6">
            {!! Form::submit('Update bKash',['class'=>'btn btn-primary   col-sm-11']) !!}
        </div>



        {!! Form::Close() !!}

        {!! Form::open(['method'=>'Delete','action'=>["AdminBkashController@destroy",$bkash->id]]) !!}


        <div class="form-group  col-sm-6">
            {!! Form::submit('Delete bKash',['class'=>'btn btn-danger col-sm-11']) !!}
        </div>
        {!! Form::Close() !!}

    </div>
@endsection