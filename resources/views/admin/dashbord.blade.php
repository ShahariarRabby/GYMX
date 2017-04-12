@extends('layouts.admin')
{{--@section('header')--}}
    {{--<img height="50px" width="50px" class="img-circle"--}}
         {{--src="{{asset(\Illuminate\Support\Facades\Auth::user()->photo ? ("images/".(\Illuminate\Support\Facades\Auth::user()->photo->file)):(\Illuminate\Support\Facades\Auth::user()->profile->gender=="Male"?"images/2.png":"images/1.png"))}}" alt="{{\Illuminate\Support\Facades\Auth::user()->name}}">  Welcome {{\Illuminate\Support\Facades\Auth::user()->name}}--}}
{{--@endsection--}}
@section('content')
    <style>
        .page-header{
            display: none;
            padding-bottom: 5px;
        }
    </style>
    <div class="row" style="padding-top: 20px">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary" style="border: none">
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
                    <div class="panel-footer" style="color: #428BCA">
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

    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <script src="https://www.amcharts.com/lib/3/themes/none.js"></script>


    <style>
       #chartdiv  a{
            display: none;
        }
    </style>


    <script>
        var chart = AmCharts.makeChart("chartdiv", {
            "type": "serial",
            "theme": "none",
            "marginRight": 70,
            "dataProvider": [{
                "country": "Users",
                "visits": {{$user}},
                "color": "#FF0F00"
            }, {
                "country": "Active",
                "visits": {{$Active}},
                "color": "#FF6600"
            }, {
                "country": "Suspand User",
                "visits": {{$notActive}},
                "color": "#FF9E01"
            }, {
                "country": "Package",
                "visits": {{$package1}},
                "color": "#FCD202"
            }, {
                "country": "Package 2",
                "visits": {{$package2}},
                "color": "#F8FF01"
            }, {
                "country": "Package 3",
                "visits": {{$package3}},
                "color": "#B0DE09"
            }, {
                "country": "Package 4",
                "visits": {{$card}},
                "color": "#04D215"
            },
                {
                "country": "Card",
                "visits": {{$bkash}},
                "color": "#0D8ECF"
            }, {
                "country": "bKash",
                "visits": {{$payment}},
                "color": "#0D52D1"
            }, {
                "country": "Total Payment",
                "visits": {{$task}},
                "color": "#2A0CD0"
            }, {
                "country": "Message",
                "visits": {{$chat}},
                "color": "#8A0CCF"
            }],
            "valueAxes": [{
                "axisAlpha": 0,
                "position": "left",
                "title": "Summery of the site"
            }],
            "startDuration": 1,
            "graphs": [{
                "balloonText": "<b>[[category]]: [[value]]</b>",
                "fillColorsField": "color",
                "fillAlphas": 0.9,
                "lineAlpha": 0.2,
                "type": "step",
                "valueField": "visits"
            }],
            "chartCursor": {
                "categoryBalloonEnabled": false,
                "cursorAlpha": 0,
                "zoomable": false
            },
            "categoryField": "country",
            "categoryAxis": {
                "gridPosition": "start",
                "labelRotation": 45
            },
            "export": {
                "enabled": true
            }

        });
    </script>

    <style>
        #chartdiv {
            width: 100%;
            height: 500px;
        }

        .amcharts-export-menu-top-right {
            top: 10px;
            right: 0;
        }
    </style>
    <div id="chartdiv"></div>



@endsection