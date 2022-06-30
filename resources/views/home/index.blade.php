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
            
            <a href="#blog"><img src="{{asset('img/img1.jpg')}}"  alt=""/>  </a>  
            @endauth

            @guest 
            <div class="gallery">
              <a href="#blog"><img src="{{asset('img/img1.jpg')}}"  alt=""/>  </a>
              <a href="#contactanos"><img src="{{asset('img/img1.jpg')}}"  alt=""/>  </a>
              <a href="#acerca"><img src="{{asset('img/img1.jpg')}}"  alt=""/>  </a>
              <a href="#desarrolladores"><img src="{{asset('img/img1.jpg')}}"  alt=""/>  </a>
            </div>

            
            <section id="blog">BLOG</section>
            <section id="contactanos">CONTACTANOS</section>
            <section id="acerca">ACERCA DE</section>
            <section id="desarrolladores">DESARROLLADORES</section>
            @endguest

           
                        
        </div>        
    </body>    
@endsection
