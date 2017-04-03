@extends('layouts.admin')
@section('header')
    Create Task
@endsection
@section('content')
    {!! Form::open(['method'=>'POST','action'=>"AdminTaskController@store"]) !!}


    <div class="col-sm-4 col-12">

        @include('includes.form_errors')
        <div class="form-group">
            {!! Form::label('Name','Task Name: ',['style'=>'margin-right : 20px']) !!}
            {!! Form::text('name',null,['class'=>'form-control col-2','required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('details','Details: ',['style'=>'margin-right : 20px']) !!}
            {!! Form::text('details',null,['class'=>'form-control col-2','required']) !!}
        </div>

        <div class="form-group ">
            {!! Form::label('endDate','End Date: ',['class'=>'Col']) !!}
            {!! Form::date('endDate' , \Carbon\Carbon::now()->addDays(3),['class'=>'form-control col-2' ]) !!}

        </div>

        <div class="form-group ">
            {!! Form::submit('Create task',['class'=>'btn btn-primary ']) !!}
        </div>



        {!! Form::Close() !!}



    </div>
@endsection