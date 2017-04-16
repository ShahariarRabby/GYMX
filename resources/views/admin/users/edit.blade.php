@extends('layouts.admin')
@section('header')
    Edit User
@endsection
@section('content')
    <div style="padding-bottom:10% ">
    {!! Form::model($user,['method'=>'PATCH','id'=>'form1','action'=>["AdminUsersController@update",$user->id],'files'=>true]) !!}

    <div class="col-sm-3 col-12" >
        <img id="blah" src="{{asset($user->photo ? ("images/".($user->photo->file)):"images/picture-default.png")}}" class="img-responsive img-rounded">
        {{--{!! Form::model($user,['method'=>'PATCH','action'=>["AdminUsersController@update",$user->id],'files'=>true]) !!}--}}
        <div class="form-group">
            {!! Form::label('photo_id','Edit Photo') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control','id'=>'form1']) !!}
        </div>
        <a class="btn btn-primary" href="{{url('/admin/photo?id='.$user->id)}}" >Delete Photo</a>
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


        <div class="form-group">
            {!! Form::label('Credit','Add Credit') !!}
            {!! Form::number('Credit',null,['class'=>'form-control','placeholder'=>"Add some amount"]) !!}
        </div>


        <div class="form-group">
            {!! Form::label('role_id','Role') !!}
            {!! Form::select('role_id',array(''=>'Choose option','Admin'=>'Admin','User'=>'User'),$roles,['class'=>'form-control']) !!}
        </div>

         <div class="form-group">
            {!! Form::label('role_id','Package') !!}
             {!! Form::select('package_id',[''=>'Choose Option']+$package,null,['class'=>'form-control'])!!}
        </div>


        <div class="form-group">
            {!! Form::label('is_active','Status') !!}
            {!! Form::select('is_active',array('Active'=>'Active','Not Active'=>'Not Active'),null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('confirmed','Confirmed') !!}
            {!! Form::select('confirmed',array('0'=>'No','1'=>'Yes'),null,['class'=>'form-control']) !!}
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
    </div>
@endsection