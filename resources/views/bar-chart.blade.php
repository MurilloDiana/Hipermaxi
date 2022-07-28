@extends('layouts.app')
@extends('layouts.partials.navbar_recusos_humanos')
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js" integrity="sha512-SuxO9djzjML6b9w9/I07IWnLnQhgyYVSpHZx0JV97kGBfTIsUYlWflyuW4ypnvhBrslz1yJ3R+S14fdCWmSmSA==" crossorigin="anonymous"></script>
        <div style="height: 400px; width: 900px; margin: auto;">
            <canvas id="barChart"></canvas>
        </div>
        
        <a class="btn btn-primary" href="{{ url('admin/chart') }}" role="button">Gráfico de Nuevos Usuarios</a>
      
    
        <script>
            $(function() {
                let datas = <?php echo json_encode($datas) ?>;
                let barCanvas = $("#barChart");
                let barChart = new Chart(barCanvas, {
                    type: 'bar',
                    data: {
                        labels: ['Ene', 'Feb', 'Mzo', 'Abr', 'May', 'Jun', 'Jul', 'Agt', 'Sep', 'Oct', 'Nov', 'Dic'],
                        datasets: [
                            {
                                label: ' Faltas, 2022',
                                data: datas,
                                backgroundColor: ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'grey', 'purple', 'gold', 'silver', 'brown', 'dark-blue']
                            }
                        ]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                })
            })
        </script>
    

@endsection