@extends('layouts.admin')
@section('header')
    Create Task
@endsection
@section('content')
    {!! Form::model($tasks,['method'=>'PATCH','action'=>["AdminTaskController@update",$tasks->id]]) !!}


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
            {!! Form::date('endDate' , null,['class'=>'form-control col-2' ]) !!}

        </div>

        <div class="form-group col-sm-6">
            {!! Form::submit('Update task',['class'=>'btn btn-primary ']) !!}
        </div>
        {!! Form::Close() !!}
        {!! Form::open(['method'=>'Delete','action'=>["AdminTaskController@destroy",$tasks->id]]) !!}

        <div class="form-group  col-sm-6" style="padding: 0">
            {!! Form::submit('Delete Task',['class'=>'btn btn-danger ']) !!}
        </div>
        {!! Form::Close() !!}


    </div>
@endsection