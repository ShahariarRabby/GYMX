@extends('layouts.admin')
@section('header')
<i class="fa fa-money" aria-hidden="true"></i>  Payments Summery
@endsection
@section('content')

    <table class="table table-hover table-responsive">
        <thead>
        <tr>
            <th>Card</th>
            <th>Bkash</th>
            <th>Total</th>

        </tr>
        </thead>
        <tbody>

            <tr>
                <td>{{$card}}</td>
                <td>{{$bkash}}</td>
                <td>{{$amount}}</td>
            </tr>

        </tbody>
    </table>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Card',    {{$card}}],
                ['bKash',    {{$bkash}}],

            ]);

            var options = {
                title: 'Payment Summery'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>

    <div id="piechart" style="width: 900px; height: 500px;"></div>

@endsection