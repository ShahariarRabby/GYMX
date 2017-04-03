@extends('layouts.admin')
@section('header')
    Package
@endsection
@section('content')
    <table class="table table-hover table-responsive">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Amount</th>
            <th>Time</th>
        </tr>
        </thead>
        <tbody>
        @foreach($package as $package)
            <tr>
                <td>{{$package->id}}</td>
                <td><a href="{{route('package.edit', [$package->id])}}">{{$package->name}}</a></td>
                <td>{{$package->amount}}</td>
                <td> {{$package->time}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>












@endsection