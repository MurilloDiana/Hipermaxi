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
            <form class="m-t" role="form"  action="{{route('login')}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Codigo" required="" name="CODIGO">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Usuario" required="" name="USUARIO">
                </div>
                <p>Introduzca su Cargo  </p>
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
                <button type="submit" class="btn btn-primary block full-width m-b">INGRESAR</button>
                
            </form>
            <p class="m-t"> <small>GRUPO 3 &copy; 2022</small> </p>
        </div>
    </div>
@endsection
