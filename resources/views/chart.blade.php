@extends('layouts.master')
@section('content')
    <div>
    <div id="chart-container"></div>
        
    <a class="btn btn-primary" href="{{ url('bar-chart') }}" role="button">Gráfico de Barras</a>
    <br>
    <a class="btn btn-primary" href="{{ url('/') }}" role="button">Inicio</a>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        

        Highcharts.chart('chart-container', {
            title: {
                text: 'Incremento de nuevos usuarios, 2020'
            },
            subtitle: {
                text: 'Fuente: medios de TI'
            },
            xAxis: {
                categories: ['Ene', 'Feb', 'Mzo', 'Abr', 'May', 'Jun', 'Jul', 'Agt', 'Sep', 'Oct', 'Nov', 'Dic']
            },
            yAxis: {
                title: {
                    text: 'Numero de nuevos Usuarios'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'Nuevo Usuario',
                data:datas
            }],
            responsive: {
                rules: [
                    {
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom'
                            }
                        }
                    }
                ]
            }
        })

    </script>
    </div>

@endsection