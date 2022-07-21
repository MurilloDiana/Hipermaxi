<link rel="stylesheet" href="{{asset('assets/css/navbar.css')}}">
<header class="p-3 text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">        
        @auth            
            <nav>                        
            <a class="btn btn-primary" href="{{route('admin.home')}}">Inicio</a>            
            <a class="btn btn-primary" href="{{route('contrato.index')}}">Contrato</a>            
            <a class="btn btn-primary" href="{{route('chart')}}">Estadistica</a>            
            <a class="btn btn-primary" href="{{route('antiguedad.index')}}">Antiguedad</a>                     
            <a class="btn btn-primary" href="{{route('solicita')}}">Boleta de Pagos</a>                        
            <a class="btn btn-primary" href="{{route('mostrar.index')}}">Descuentos</a>
            <a class="btn btn-primary" href="{{route('pagoadicional.index')}}">Pago Adicional</a>
            </nav>            
      @endauth                             

      @guest
        <nav>
          <a href="{{ url('/') }}">Inicio</a>        
          <a href="#blog">Blog</a>        
          <a href="#contactanos">Contactanos</a>
          <a href="#acercade">acerca de...</a>
          <div class="animation start-home"></div>
        </nav>
      @endguest
    </div>
  </div>
</header>