@extends('layouts.admin')
@section('header')
    Create User
@endsection
@section('content')

@include('includes.form_errors')
{!! Form::open(['method'=>'POST','action'=>"AdminUsersController@store",'files'=>true]) !!}
<div class="form-group">
    {!! Form::label('Name','Name') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email','Email') !!}
    {!! Form::email('email',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password','Password') !!}
    {!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
</div>

<div class="form-group">
    {!! Form::label('photo_id','Photo') !!}
    {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('role_id','Role') !!}
    {!! Form::select('role_id',[''=>'Choose Option']+$roles,null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('is_active','Status') !!}
    {!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),0,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}

</div>


@endsection