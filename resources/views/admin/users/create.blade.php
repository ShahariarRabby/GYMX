@extends('layouts.admin')
@section('header')
    Create User
@endsection
@section('content')

    @include('includes.form_errors')
  <div>
    <div class="col-md-6 col-12" style="padding-bottom: 10%">
    {!! Form::open(['method'=>'POST','action'=>"AdminUsersController@store",'files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('Name','Name') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    {{--<div class="form-group">--}}
        {{--{!! Form::label('role_id','Name') !!}--}}
        {{--{!! Form::text('role_id',null,['class'=>'form-control']) !!}--}}
    {{--</div>--}}

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

    {{--<div class="form-group">--}}
    {{--{!! Form::label('role_id','Role') !!}--}}
    {{--{!! Form::select('role_id',[''=>'Choose Option']+$roles,null,['class'=>'form-control']) !!}--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
    {{--{!! Form::label('role_id','Role') !!}--}}
    {{--{!! Form::select('role_id',array('User'=>'User','Admin'=>'Admin'),'User',['class'=>'form-control']) !!}--}}
    {{--</div>--}}

    <div class="form-group">
        {!! Form::label('role_id','Role') !!}
        {!! Form::select('role_id',array('Admin'=>'Admin','User'=>'User'),'User',['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('role_id','Package') !!}
        {!! Form::select('package_id',[''=>'Choose Option']+$package,null,['class'=>'form-control','style'=>'height: 45px','required'])!!}
    </div>



    <div class="form-group">
        {!! Form::label('is_active','Status') !!}
        {!! Form::select('is_active',array('Active'=>'Active','Not Active'=>'Not Active'),null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}

    </div>
{!! Form::close() !!}
</div></div>
    <div class="col-4">
        <img id="blah" style="height: 200px;width: 200px; margin-top: 50px" src="" class="img-responsive blah img-rounded">
    </div>
@endsection