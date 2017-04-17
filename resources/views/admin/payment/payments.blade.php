@extends('layouts.admin')
@section('header')
    <i class="fa fa-money" aria-hidden="true"></i>  Payments
@endsection
@section('content')

    <table class="table table-hover table-responsive">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Credit</th>
            <th>Debit</th>
            <th>Balance</th>
            <th>Type</th>
            <th>Time</th>

        </tr>
        </thead>
        <tbody>
        @foreach($payment as $payment)
            <tr>
                <td>{{$payment->id}}</td>
                <td><a href="{{route('payment.edit', [$payment->id])}}">Edit</a></td>
                <td>{{$payment->Credit}}</td>
                <td>{{$payment->Debit}}</td>
                <td> {{$payment->Balance}}</td>
                <td>{{$payment->Type}}</td>
                <td>{{$payment->updated_at->diffForHumans()}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>












@endsection