@extends('layouts.admin')
@section('header')
    All Tasks
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
            <th>Name</th>
            <th>Details</th>
            <th>End Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($task as $task)
            <tr>
                <td><a href="{{url('admin/task/'.$task->id.'/edit')}}">{{$task->name}}</a></td>
                <td>{{$task->details}}</td>
                <td>{{date_format(date_create($task->endDate), 'M-d-Y')}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>












@endsection