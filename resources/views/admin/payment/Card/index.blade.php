@extends('layouts.admin')
@section('header')
    Cards
@endsection
@section('content')

    <table class="table table-hover table-responsive">
        <thead>
        <tr>
            <th>Card No</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Created At</th>

        </tr>
        </thead>
        <tbody>
        @foreach($card as $card)
            <tr>

                <td><a href="{{route('card.edit', [$card->id])}}">{{$card->id}}</a></td>
                <td>{{$card->amount}}</td>
                <td> {{$card->status}}</td>
                <td>{{$card->updated_at->diffForHumans()}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection