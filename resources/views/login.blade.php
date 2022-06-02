@extends('layouts.master')
@section('title', 'login')
@section('content')
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <img src="{{asset('img/logoSI.png')}}" alt="" style="width:200px">
            </div>
            <h3>Bienvenidos al Sistema de</h3>
            <h4> Informacion de Asistencia</h4>
            <p>Iniciar Sesion</p>
            <form class="m-t" role="form"  method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-label" placeholder="Usuario" required="" name="login">
                </div>
                <div class="form-group">
                    <input type="password" class="form-label" placeholder="Contraseña" required="" name="password">
                </div>
                <p>Introduzca su Cargo  </p>
                <div class="form-group">
                    <select class="form-label" name="tipo" id="tipo">
                        <p>Introduzca su Cargo  </p>
                        <option value="est">EMPLEADO</option>
                        <option value="adm">ADMINISTRATIVO</option>    
                        <option value="est">RRHH</option>     
                    </select>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">INGRESAR</button>
                
            </form>
            <p class="m-t"> <small>GRUPO 3 &copy; 2022</small> </p>
        </div>
    </div>
@endsection
