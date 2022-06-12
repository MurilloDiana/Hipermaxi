<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HIPERMAXI</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">    
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <img src="{{asset('img/logoSI.png')}}" alt="" style="width:200px">
            </div>
            <h3>Bienvenidos al Sistema de Informacion de Asistencia</h3>
            <p>Iniciar Sesion</p>
            <form class="m-t" role="form"  action="{{route('login')}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Codigo" required="" name="CODIGO">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Usuario" required="" name="USUARIO">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="PASSWORD">
                </div>
                <div class="form-group">
                    <select class="form-control" name="NIVEL" >
                        <option value="1">RRHH</option>
                        <option value="2">ADMINISTRADOR</option>
                        <option value="3">TRABAJADOR BASE</option>        
                    </select>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                
            </form>
            <p class="m-t"> <small>GRUPO 3 &copy; 2022</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>

</body>

</html>
