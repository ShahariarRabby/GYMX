@extends('layouts.admin')
@section('header')
    <i class="fa fa-comments" aria-hidden="true"></i>  Chats
@endsection
@section('content')
    <style>
        .msg{
            overflow-y: scroll;
            overflow-x: auto;
        }
        .msg ul{
            list-style: none;
        }
        #adminChat{
            border: none;
        border-bottom: 1px solid gray;
        border-radius: 0;


        background:none;
        }
        #adminChat:focus{


            outline: none;
            border-bottom: 1px solid green;
        }
             #adminChat:disabled{
                 background: none !important;
                 border-radius: 0;
                 border: none !important;
             }
        .msg {
            width: 100%;
            height: 300px;
            overflow-y: auto;
            overflow-x: hidden;}
        .msg::-webkit-scrollbar {
             width: 2px;
             height: 5px;
         }
        .msg::-webkit-scrollbar-thumb {
             background-color: green;
            border: none;
         }
        #deletebtnchat{
            background-color: transparent;
            border: none;
            padding-left: 10px;
        }
    </style>
    <div class="row">
        <div class="col-md-6 col-12">
            <div class="msg" style="height: 400px">

                @foreach($message as $message)
                <ul>
                    <li>
                        <h4>{{$message->name}}
                            <form method="post" action="chat/{{$message->id}}" style="display: inline-block">

                                <input name="_method" type="hidden" value="DELETE">

                                <a>
                                    <small><small>{{$message->created_at->diffforhumans()}}</small><button id="deletebtnchat" class="fa fa-trash-o" aria-hidden="true"></button>
                                    </small>
                            </a> <input type="hidden" name="_token" value="{{ csrf_token() }}"></form>  </h4>
                        <p></p>
                    </li>
                    <li>
                        {{$message->message}}
                    </li>
                </ul>
                    @endforeach
            </div>
            <form method="post" action="chat">
                <input name="_method" type="hidden" value="post">


                <div class="row">
                    <div class="col-xs-11">
                    <input id="adminChat" name="message" type="text" style="width: 100%;height: 30px">


                    </div>
                <div class="col-xs-1">
                        <button  style="background: none;border: none;color: #1fae66;" type="submit">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    </button>
            </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>











@endsection