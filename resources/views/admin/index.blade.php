@extends('layouts.admin')
@section('header')

    Welcome {{\Illuminate\Support\Facades\Auth::user()->name}}

@endsection
@section('content')
    <h1>
        You are Admin
    </h1>
    @endsection