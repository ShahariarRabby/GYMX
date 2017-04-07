@extends('layouts.admin')
@section('header')
    <i class="fa fa-users" aria-hidden="true"></i>
    Users Summery
@endsection
@section('content')

    <table class="table table-hover table-responsive">
        <thead>
        <tr>
            <th>Total Users</th>
            <th>Active Users</th>
            <th>Suspend Users</th>

        </tr>
        </thead>
        <tbody>

        <tr>
            <td>{{$Active+$notActive}}</td>
            <td>{{$Active}}</td>
            <td>{{$notActive}}</td>
        </tr>

        </tbody>
    </table>




    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Active', 'Users'],
                ['{{\App\Package::find(1)->name}}',  {{$package1}}],
                ['Not Active',  {{$notActive}}],
                ['{{\App\Package::find(2)->name}}',  {{$package2}}],
                ['{{\App\Package::find(3)->name}}',  {{$package3}}],
            ]);

            var options = {
                title: 'Users Activities',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>

    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>


@endsection