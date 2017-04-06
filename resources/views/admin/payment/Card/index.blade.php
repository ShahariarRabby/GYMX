{{--@extends('layouts.admin')--}}
{{--@section('header')--}}
    {{--bKash--}}
{{--@endsection--}}
{{--@section('content')--}}

    {{--<table class="table table-hover table-responsive">--}}
        {{--<thead>--}}
        {{--<tr>--}}
            {{--<th>Card No</th>--}}
            {{--<th>Amount</th>--}}
            {{--<th>Status</th>--}}
            {{--<th>Created At</th>--}}

        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
        {{--@foreach($card as $card)--}}
            {{--<tr>--}}

                {{--<td><a href="{{route('card.edit', [$card->id])}}">{{$card->id}}</a></td>--}}
                {{--<td>{{$card->amount}}</td>--}}
                {{--<td> {{$card->status}}</td>--}}
                {{--<td>{{$card->updated_at->diffForHumans()}}</td>--}}
            {{--</tr>--}}
        {{--@endforeach--}}
        {{--</tbody>--}}
    {{--</table>--}}


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
                <td><a href="{{route('payment.edit', [$payment->id])}}">{{$payment->user->name}}</a></td>
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









{{--@endsection--}}