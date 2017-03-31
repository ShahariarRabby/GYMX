@extends('layouts.admin')
@section('header')
    bKash
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
            <th>Status</th>
            <th>Amount</th>
            <th>Mobile No</th>
            <th>Transaction  Id</th>
            <th>Time</th>

        </tr>
        </thead>
        <tbody>
        @foreach($bkash as $bkash)
             <tr>

                 <td><a href="{{route('bkash.edit', [$bkash->id])}}">{{$bkash->user->name}}</a></td>
                <td>{{$bkash->status}}</td>
                <td>{{$bkash->amount}}</td>
                <td> {{$bkash->phone}}</td>
                <td>{{$bkash->t_id}}</td>
                <td>{{$bkash->	updated_at->diffForHumans()}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>












@endsection