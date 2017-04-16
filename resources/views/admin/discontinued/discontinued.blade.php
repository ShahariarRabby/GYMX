@extends('layouts.admin')
@section('header')
Discontinued Users
@endsection
@section('content')


    <table class="table table-hover table-responsive">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Package</th>
            <th>Status</th>
            <th>Action</th>


        </tr>
        </thead>
        <tbody>
        @foreach($discontinued as $discontinued)
            <tr>
                <td>{{$discontinued->id}}</td>
                <td>{{$discontinued->name}}</td>
                <td>{{$discontinued->profile->package->name}}</td>
                <td>{{$discontinued->is_active}}</td>
                <td>
                    <style>
                        #editDiscontinued{
                            background-color:  transparent;
                            border: none;
                            padding: 0 30px;
                        }
                    </style>
                    <a href="{{route('discontinue.edit',$discontinued->id)}}"><button id="editDiscontinued" type="submit" ><i class="fa fa-pencil" style="color: black"  aria-hidden="true"></i></button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>












@endsection