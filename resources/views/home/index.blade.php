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
            <!--@auth
            <h1>Dashboard</h1>
            
            <div class="cardi">
                <img src="{{asset('img/img1.jpg')}}"  alt=""/>
                <div class="details">
                    <h4>Acerca de Nosotros</h4>
                    <p>Prueba Prueba Prueba</p>
                </div>
            </div>
            @endauth-->
            <div class="gallery">
              <a href="#blog"><img src="{{asset('img/img2.jpg')}}"  alt=""/>  </a>
              <a href="#contactanos"><img src="{{asset('img/img4.jpg')}}"  alt=""/>  </a>
              <a href="#acerca"><img src="{{asset('img/img6.jpg')}}"  alt=""/>  </a>
              <a href="#desarrolladores"><img src="{{asset('img/img9.webp')}}"  alt=""/>  </a>
            </div>

            
           <!-- <section id="blog">BLOG</section>
            <section id="contactanos">CONTACTANOS</section> -->
           
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
        </div>        
    </body>    
@endsection
