@extends('layouts.admin')
@section('header')
    Create Package
@endsection
@section('content')

    {!! Form::open(['method'=>'POST','action'=>"AdminPackegeController@store"]) !!}


    <div class="col-sm-4 col-12">

        @include('includes.form_errors')

        <div class="form-group">
            {!! Form::label('Name','Package Name: ',['style'=>'margin-right : 20px']) !!}
            {!! Form::text('name',null,['class'=>'form-control col-2']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('amount','Amount: ',['style'=>'margin-right : 20px']) !!}
            {!! Form::number('amount',null,['class'=>'form-control col-2']) !!}
        </div>

        <div class="form-group col-4">
            {!! Form::label('time','Time (day): ',['class'=>'Col']) !!}
            {!! Form::number('time',null,['class'=>'form-control col-2','required' ]) !!}

        </div>



        <div class="form-group  col-sm-6">
            {!! Form::submit('Create Package',['class'=>'btn btn-primary']) !!}
        </div>



        {!! Form::Close() !!}



    </div>
@endsection