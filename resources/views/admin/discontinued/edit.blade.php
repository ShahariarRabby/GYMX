@extends('layouts.admin')
@section('header')
    Edit Discontinued
@endsection
@section('content')
    <div style="padding-bottom:10% ">
        {!! Form::model($discontinued,['method'=>'PATCH','action'=>["AdminDiscontinueUser@update",$discontinued->id],'files'=>true]) !!}

        <div class="col-sm-6 col-12">
            @include('includes.form_errors')
            <div class="form-group">
                {!! Form::label('user_id','User ID: '.$discontinued->user->id) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Name','User Name: '.$discontinued->user->name) !!}
            </div>
            <div class="form-group">
                {!! Form::label('discontinued','Discontinued Date') !!}
                {!! Form::dateTime('discontinued',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('is_active','User Status') !!}
                {!! Form::select('is_active',array('Active'=>'Active','Not Active'=>'Not Active'),$discontinued->user->is_active,['class'=>'form-control']) !!}
            </div>
            <div class="form-group  col-sm-6">
                {!! Form::submit('Update Discontinue Time',['class'=>'btn btn-primary ']) !!}
            </div>
            {!! Form::Close() !!}
        </div>
    </div>
@endsection