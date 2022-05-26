@extends('layouts.master')
@section('title', 'login')
@section('content')
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <img src="{{asset('img/logoSI.png')}}" alt="" style="width:200px">
            </div>
            <h3>Bienvenidos al Sistema de Informacion de Asistencia</h3>
            <p>Iniciar Sesion</p>
            <form class="m-t" role="form"  method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Usuario" required="" name="login">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="password">
                </div>
                <div class="form-group">
                    <select class="form-control" name="tipo" id="tipo">
                        <option value="est">EMPLEADO</option>
                        <option value="adm">ADMINISTRATIVO</option>    
                        <option value="est">RRHH</option>     
                    </select>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                
            </form>
            <p class="m-t"> <small>GRUPO 3 &copy; 2022</small> </p>
        </div>
    </div>
@endsection
