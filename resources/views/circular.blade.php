@extends('layouts.app')
@section('content')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<figure class="highcharts-figure">
<a class="btn btn-primary" href="{{ url('admin/chart') }}" role="button">Gráfico de Líneas</a>
<a class="btn btn-primary" href="{{ url('admin/bar-chart') }}" role="button">Gráfico de Barras</a>
<div id="container"></div>
<script> 
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'nuevo usuarios, 2020'
    },
    tooltip: {
       
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: <?php echo json_encode($data) ?>
    }]
});
</script>
</figure>
@endsection