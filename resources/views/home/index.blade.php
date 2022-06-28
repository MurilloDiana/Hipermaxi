@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/carrusel.css')}}">
<script src="{{asset('assets/js/carrusel.js')}}"></script>
    <body>
        <div class="bg-light m-0 row justify-content-center">
            @auth
            <h1>Dashboard</h1>
            <p class="lead">Only authenticated users can access this section.</p>
            @endauth

            @guest 
            <div class="gallery">
              <a href="#"><img src="{{asset('img/img1.jpg')}}"  alt=""/>  </a>
                <img src="{{asset('img/img1.jpg')}}"  alt=""/>
                <img src="{{asset('img/img1.jpg')}}"  alt=""/>
                <img src="{{asset('img/img1.jpg')}}" alt="" />
            </div>
            @endguest

           <!--  
            <div>
                <h1 class="titulo-home">HIPERMAXI</h1>
                <p class="texto-home">Por favor inicia sesion</p>            
            </div>
            <header class="contenedor">
                <div class="imagen actual">
                    <img src="{{asset('img/img1.jpg')}}" />                    
                </div>
            
                <div class="imagen">
                    <img src="{{asset('img/img2.jpg')}}" />                    
                </div>
                
                <div class="imagen">
                    <img src="{{asset('img/img3.jpg')}}" />                    
                </div>
                
                <div class="imagen">
                    <img src="{{asset('img/img4.jpg')}}" />
                </div>
            
                <a href="#" class="anterior" onclick="anterior();">&#10094;</a>
                <a href="#" class="siguiente" onclick="siguiente();">&#10095;</a>
                
                <div class="puntos">
                    <span class="punto activo" onclick="mostrar(0);"></span>
                    <span class="punto" onclick="mostrar(1);"></span>
                    <span class="punto" onclick="mostrar(2);"></span>
                    <span class="punto" onclick="mostrar(3);"></span>
                </div>  -->
                <!-- BOTON DE PAUSA
                <div class="boton">
                    <a href="#">
                        <img src="http://www.reciclay.com.ve/gio/pause.png" id="btn" onclick="playpause();" />
                    </a>
                </div>
                -->
           <!-- </header> -->
        
            <!---->   
           <!-- <section id="blog">BLOG</section>
            <section id="contactanos">CONTACTANOS</section>
            <section id="acercade">ACERCA DE</section>
                -->         
        </div>        
    </body>    
@endsection
