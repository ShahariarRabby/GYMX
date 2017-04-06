@extends('layouts.admin')
@section('header')
    <i class="fa fa-line-chart" aria-hidden="true"></i>
  Payments Summery
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
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Payment', 'Total Payment', 'Card Payment', 'bKash Payment'],
                ['Payment', {{$bkash+$bkash}}, {{$card}}, {{$bkash}}],
//
            ]);

            var options = {
                chart: {
                    title: 'Account Performance',
                    subtitle: 'Total, Card, and bKash: January 2017 to {{\Carbon\Carbon::now()->format(' F Y ') }}',
                },
                bars: 'vertical',
                vAxis: {format: 'decimal'},
                height: 400,
                colors: ['#1b9e77','#7570b3', '#4285F4']
            };

            var chart = new google.charts.Bar(document.getElementById('chart_div'));

            chart.draw(data, google.charts.Bar.convertOptions(options));


        }
    </script>

    <div id="chart_div"></div>



@endsection