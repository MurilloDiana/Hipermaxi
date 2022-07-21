@extends('layouts.app')
@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
   
    <title>Inicio</title>
    <body>
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido a DaniCodex</h2>
                <p>Si ya tienes una cuenta por favor inicia sesion aqui</p>
                <button class="sign-up-btn">Iniciar Sesion</button>
            </div>
        </div>
        <form class="formulario">
            <h2 class="create-account">Crear una cuenta</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bx-chevron-right'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bx-user-circle'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bx-chevron-left' ></i>
                    
                </div>
            </div>
            <p class="cuenta-gratis">Crear una cuenta gratis</p>
            <input type="text" placeholder="Nombre">
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Contraseña">
            <input type="button" value="Registrarse">
        </form>
    </div>
    <div class="container-form sign-in">
        <form class="formulario">
            <h2 class="create-account">Iniciar Sesion</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bx-chevron-right'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bx-user-circle'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bx-chevron-left' ></i>
                </div>
            </div>
            <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p>
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Contraseña">
            <input type="button" value="Iniciar Sesion">
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido de nuevo</h2>
                <p>Si aun no tienes una cuenta por favor registrese aqui</p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
        </div>
</div>
<script >
    const $btnSignIn= document.querySelector('.sign-in-btn'),
  $btnSignUp = document.querySelector('.sign-up-btn'),  
  $signUp = document.querySelector('.sign-up'),
  $signIn  = document.querySelector('.sign-in');

document.addEventListener('click', e => {
if (e.target === $btnSignIn || e.target === $btnSignUp) {
    $signIn.classList.toggle('active');
    $signUp.classList.toggle('active')
}
});
</script>
    </body>


@endsection