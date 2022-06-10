<link rel="stylesheet" href="{{asset('assets/css/navbar.css')}}">
<header class="p-3 text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start"> 
      <!--<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
      </form>-->

      @auth
        <a href="#">Inicio</a>        
        <a href="#blog">Asistencia</a>        
        <a href="#contactanos">Antiguedad</a>
        <a href="#acercade">acerca de...</a>
        {{auth()->user()->name}}
        <div class="text-end">
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Salir</a>
        </div>
      @endauth

      @guest
      <nav>
        <a href="#">Inicio</a>        
        <a href="#blog">Blog</a>        
        <a href="#contactanos">Contactanos</a>
        <a href="#acercade">acerca de...</a>
        <div class="animation start-home"></div>
      </nav>
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Inicia sesión</a>
          <!--<a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>-->
        </div>
      @endguest
    </div>
  </div>
</header>