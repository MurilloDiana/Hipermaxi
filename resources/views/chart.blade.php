@extends('layouts.app')
@extends('layouts.partials.navbar_recusos_humanos')
@section('content')
    <div>
    <div id="chart-container"></div>
        
    <a class="btn btn-primary" href="{{ url('admin/bar-chart') }}" role="button">Gráfico de Faltas</a>
    
    

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        let datas = <?php echo json_encode($datas) ?>

        Highcharts.chart('chart-container', {
            title: {
                text: 'Incremento de nuevos usuarios, 2022'
            },
            subtitle: {
                text: 'Hipermaxi'
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