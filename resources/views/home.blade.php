{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-10 col-md-offset-1">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Dashboard</div>--}}

                {{--<div class="panel-body">--}}
                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use App\Chat;
$message = Chat::orderBy('updated_at','desc')->get();

$date = Carbon::now();
//$now = Carbon::now();
$date->modify('-1500 minutes');
$result = DB::table('chats')->where('updated_at','<=',$date)->get();

//foreach ($resultaCT as $result2){
//    $result3 =  $result2['id'];
//    $update['is_active']= 'Active';
//    $notactive = \App\User::whereProfile_id($result3)->update($update);
//}

foreach ($result as $result){
    $result1 =  $result ->id;

    $gggg=  Chat::find($result1);
    $gggg->delete();
}


?>

@foreach($message as $message)
    <div>
        <h5>{{$message->name}} <small><small><small>{{$message->created_at->diffForHumans()}}</small></small></small> </h5>
        <p>{{$message->message}}</p>
    </div>

@endforeach
