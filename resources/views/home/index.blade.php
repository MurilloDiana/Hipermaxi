@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/carrusel.css')}}">
<script src="{{asset('assets/js/carrusel.js')}}"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <body>
        <div class="bg-light m-0 row justify-content-center">
            @auth
            <h1>Dashboard</h1>
            <p class="lead">Only authenticated users can access this section.</p>
                
            @endauth

            @guest 
            <div class="gallery">
              <a href="#blog"><img src="{{asset('img/img1.jpg')}}"  alt=""/>  </a>
              <a href="#contactanos"><img src="{{asset('img/img1.jpg')}}"  alt=""/>  </a>
              <a href="#acerca"><img src="{{asset('img/img1.jpg')}}"  alt=""/>  </a>
              <a href="#desarrolladores"><img src="{{asset('img/desarrolladores.jpg')}}"  alt=""/>  </a>
            </div>

            
            <section id="blog">BLOG</section>
            <section id="contactanos">CONTACTANOS</section>
           
            <section id="desarrolladores">DESARROLLADORES
              <div class ="dropdown-menu">
                 Diana Murillo Condori
                   <ul class="dropdown">
                    <li>Ing Informatica</li> 
                    <li> ........</li> 
                    <li>.........</li>
                    <li>Fronted</li> 
                   
                   </ul> 
              </div>
              <div class ="dropdown-menu">
                Nelson Fabian Galvan Vega
                   <ul class="dropdown">
                    <li>Ing Sistemas </li>
                    <li>........</li> 
                    <li>........</li>
                    <li> FULL Developer</li>
                   </ul> 
              </div>  
              <div class ="dropdown-menu">
                Jorge Eduardo Cari Acara
                   <ul class="dropdown">
                    <li>Ing Sistemas </li>
                    <li> ...........</li> 
                    <li> ...........</li>
                    <li> Backend</li>
                   </ul> 
              </div>  
              <div class ="dropdown-menu">
                Reny Rene Burgoa Aguilera
                   <ul class="dropdown">
                    <li>Ing Sistemas </li>
                    <li> ............</li> 
                    <li> ,,,,,,,</li>
                    <li> Fronted</li>
                   </ul> 
              </div>  
              <div class ="dropdown-menu">
                Mauricio Daniel
                   <ul class="dropdown">
                    <li>Ing Sistemas </li>
                    <li> ........</li> 
                    <li>.........</li>
                    <li>Backend </li>
                   </ul> 
              </div>       

                                                                                                                                    
            </section>
            
            @endguest

           
                        
        </div>        
    </body>    
@endsection
