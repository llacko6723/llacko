@extends('layout/private')
@section('content')

<div class="container mt-4">
  <h2>Broj rezervacija po danima</h2>
  <div id="chart_div" style="width: 100%; height: 500px;"></div>
</div>

<div id="chart_div" style="width: 100%; height: 500px;"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Datum', 'Broj rezervacija'],
            @foreach($data as $d)
                ['{{ \Carbon\Carbon::parse($d->datum)->format("d.m.") }}', {{ $d->broj }}],
            @endforeach
        ]);

        var options = {
            title: 'Broj rezervacija po danima',
            curveType: 'function',
            legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>

@endsection