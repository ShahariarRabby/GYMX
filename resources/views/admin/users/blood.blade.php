<?php


?>

@extends('layouts.admin')
@section('header')
    Blood Group
@endsection
@section('content')
    {{--@if( Auth::user()->photo_id=='')--}}
    {{--no pic--}}

    {{--@else--}}
    {{--pic--}}
    {{--@endif--}}

    <table class="table table-hover table-responsive">
        <thead>
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Blood Group</th>

        </tr>
        </thead>
        <tbody>
        @foreach($userBlood as $user)
            <tr>
                <td scope="row">{{$user->id}}</td>
                <td >
                    <img height="50px" width="50px" class="img-circle"
                           src="{{asset($user->photo ? ("images/".($user->photo->file)):"images/picture-default.png")}}" alt="{{$user->name}}"></td>
                <td>
                    <a title="View User" href="{{ url('users/' .$user->id) }}">{{$user->user->name}}</a></td>
                {{--{{route('admin.users.edit',$user->id)}}--}}
                <td>{{$user->user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->bloodGroup}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>












@endsection
