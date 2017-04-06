@extends('layouts.admin')
@section('header')
    Edit  Card
@endsection
@section('content')
    {!! Form::model($cards,['method'=>'PATCH','action'=>["AdminCardControler@update",$cards->id]]) !!}



    <div class="col-sm-4 col-12">

        @include('includes.form_errors')
        <div class="form-group">
            {!! Form::label('id','Card No: ',['style'=>'margin-right : 20px']) !!}
            {!! Form::text('id',null,['class'=>'form-control col-2','required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('amount','Amount: ',['style'=>'margin-right : 20px']) !!}
            {!! Form::number('amount',null,['class'=>'form-control col-2','required']) !!}
        </div>

        <div class="form-group ">
            {!! Form::label('Status','Status: ',['class'=>'Col']) !!}
            {!! Form::text('status',null,['class'=>'form-control col-2' ]) !!}

        </div>

        <div class="form-group col-sm-6 ">
            {!! Form::submit('Update card',['class'=>'btn btn-primary ']) !!}
        </div>
        {!! Form::Close() !!}

        {!! Form::open(['method'=>'Delete','action'=>["AdminCardControler@destroy",$cards->id]]) !!}
        <div class="form-group  col-sm-6">
            {!! Form::submit('Delete Card',['class'=>'btn btn-danger']) !!}
        </div>
        {!! Form::Close() !!}



    </div>
@endsection