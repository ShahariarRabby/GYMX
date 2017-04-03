@extends('layouts.admin')
@section('header')
    Create Card
@endsection
@section('content')
    {!! Form::open(['method'=>'POST','action'=>"AdminCardControler@store",'files'=>true]) !!}


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

        <div class="form-group ">
            {!! Form::submit('Create card',['class'=>'btn btn-primary ']) !!}
        </div>



        {!! Form::Close() !!}



    </div>
@endsection