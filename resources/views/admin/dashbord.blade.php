@extends('layouts.admin')
@section('header')
    <img height="50px" width="50px" class="img-circle"
         src="{{asset(\Illuminate\Support\Facades\Auth::user()->photo ? ("images/".(\Illuminate\Support\Facades\Auth::user()->photo->file)):(\Illuminate\Support\Facades\Auth::user()->profile->gender=="Male"?"images/2.png":"images/1.png"))}}" alt="{{\Illuminate\Support\Facades\Auth::user()->name}}">  Welcome {{\Illuminate\Support\Facades\Auth::user()->name}}
@endsection
@section('content')

    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class='huge'>{{$user}}</div>
                            <div>Users</div>
                        </div>
                    </div>
                </div>
                <a href="{{url('admin/users')}}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>





        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-credit-card fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class='huge'>{{$amount}}</div>
                            <div>Taka</div>
                        </div>
                    </div>
                </div>
                <a href="{{url('admin/payment')}}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>


        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-sitemap fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class='huge'>{{$package}}</div>
                            <div> Packages</div>
                        </div>
                    </div>
                </div>
                <a href="{{url('admin/package')}}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>


        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class='huge'>{{$task}}</div>
                            <div>Task</div>
                        </div>
                    </div>
                </div>
                <a href="{{url('admin/task')}}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>




@endsection