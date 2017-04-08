@extends('layouts.users')
@section('title')
    Task
    @endsection
@section('userSummery')
    @include('users.userSummery')
@endsection
@section('tabs1')

<div id="tabs-2">

    <style>


        #dash{
            display: none;
        }
        #task{
        display: block;
        }
        </style>


    <div class="container">

        <div class="row">

            <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-bolt mgr-10 profile-icon"></i> Task</h3>

        </div>

        <div class="row">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>Photos</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>End Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($task as $task)
                <tr class="boxshadow">
                    <td>
                        <style>
                            .boxshadow{
                                box-shadow:  none;
                                transition:height 1s,  box-shadow .5s;

                            }
                        .boxshadow:hover{
                            height: 100px;
                         box-shadow:  5px 5px  50px 5px  #888888;

                        }
                        .taskimg{
                            height: 50px;
                        }

                        </style>
                        @if($task->id %2 == 0)
                        <img class="taskimg" src="{{asset('images/2.png')}}" alt="{{$task->name}}">
                            @else
                            <img class="taskimg" src="{{asset('images/3.png')}}" alt="{{$task->name}}">
                            @endif
                    </td>

                    <td class="center">{{$task->name}}</td>

                    <td class="center">
                        {{$task->details}}
                    </td>

                    <td class="center">
                        <?php
                        $date = date_create($task->endDate);
                        echo date_format($date, 'Y-m-d');
                            ?>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection