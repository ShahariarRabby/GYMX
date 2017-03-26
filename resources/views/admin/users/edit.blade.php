@extends('layouts.admin')
@section('header')
    Edit User
@endsection
@section('content')
    {!! Form::model($user,['method'=>'PATCH','action'=>["AdminUsersController@update",$user->id],'files'=>true]) !!}

    <div class="col-sm-3 col-12" >
        <img src="{{asset($user->photo ? ("images/".($user->photo->file)):($user->role_id==1?"images/2.png":"images/1.png"))}}" class="img-responsive img-rounded">
        {{--{!! Form::model($user,['method'=>'PATCH','action'=>["AdminUsersController@update",$user->id],'files'=>true]) !!}--}}
        <div style="overflow: hidden" class="form-group">
            {!! Form::label('photo_id','Edit Photo') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
        </div>
        {{--{!! Form::Close() !!}--}}

    </div>

    <div class="col-sm-9 col-12">

    @include('includes.form_errors')
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

    {{--<div class="form-group">--}}
        {{--{!! Form::label('photo_id','Photo') !!}--}}
        {{--{!! Form::file('photo_id',null,['class'=>'form-control']) !!}--}}
    {{--</div>--}}

        <div class="form-group">
        {!! Form::label('role','Role') !!}
            {!! Form::select('role',array('User'=>'User','Admin'=>'Admin'),'User',['class'=>'form-control']) !!}
        </div>

    <div class="form-group">
        {!! Form::label('is_active','Status') !!}
        {!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group  col-sm-6">
        {!! Form::submit('Update User',['class'=>'btn btn-primary   col-sm-11']) !!}

    </div>



    {!! Form::Close() !!}
    {!! Form::open(['method'=>'Delete','action'=>["AdminUsersController@destroy",$user->id]]) !!}


    <div class="form-group  col-sm-6">
        {!! Form::submit('Delete User',['class'=>'btn btn-danger col-sm-11']) !!}
    </div>
    {!! Form::Close() !!}
    </div>
@endsection