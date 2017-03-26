@extends('layouts.admin')
@section('header')
    All Users
    @endsection
@section('content')
    {{--@if( Auth::user()->photo_id=='')--}}
        {{--no pic--}}

{{--@else--}}
        {{--pic--}}
    {{--@endif--}}
    @if(Session::has('create_user'))
        <div class="alert alert-success" style="display: inline-block  " script="alert("asd");" role="alert">
            <strong>User Created Successfully !</strong>
        </div>
    @endif

    @if(Session::has('Update_user'))
        <div class="alert alert-info" style="display: inline-block" role="alert">
            <strong>User Updated Successfully !</strong>
        </div>
    @endif

@if(Session::has('Delete_user'))
    <div class="alert alert-danger" style="display: inline-block" role="alert">
        <strong>User Deleted</strong>
    </div>
  @endif

<table class="table table-hover table-responsive">
  <thead>
    <tr>
      <th>ID</th>
      <th>Photo</th>
      <th>Name</th>
      <th>Email</th>
      <th>Role</th>
      <th>Status</th>
      <th>Created</th>
      <th>Updated</th>

    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <th  ><img height="50px" width="50px" class="img-circle" src="{{asset($user->photo ? $user->photo->file:($user->role_id==1?"images/2.png":"images/1.png"))}}" alt="{{$user->name}}"></th>
      <td><a href="">{{$user->name}}</a></td>
        {{--{{route('admin.users.edit',$user->id)}}--}}
      <td>{{$user->email}}</td>
      <td>{{$user->role}}</td>
      <td>{{$user->is_active}}</td>
      <td>{{$user->	created_at->diffForHumans()}}</td>
      <td>{{$user->	updated_at->diffForHumans()}}</td>
    </tr>
      @endforeach
  </tbody>
</table>












    @endsection