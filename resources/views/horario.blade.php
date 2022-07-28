@extends('layouts.app')
@extends('layouts.partials.navbar_administracion')
@section('content')
<!--MOSTRAR HORARIO-->
<div class="py-4 container">
    <table class="table table-hover bg-light text-center">
    <thead class="bg-primary text-light">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">HORA DE INGRESO</th>
        <th scope="col">HORA DE SALIDA</th>
        <th scope="col">TURNO</th>
        <th scope="col">ASIGNAR EMPELADO</th>
        <th scope="col">ELIMINAR EMPELADO</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($horarios as $horario)
        <tr>
            <td>{{$horario->id}}</td>
            <td>{{$horario->hora_ingreso}}</td>
            <td>{{$horario->hora_salida}}</td>
            <td>{{$horario->turno}}</td>
            <td>           
                <form method="POST" action="{ url('/admin/asignar/'.$horario->id) }}">                
                @csrf
                @method('POST')
                <button type="submit" class="btn btn-success">ASIGNAR</button>
                </form>                
            </td>
            <td>                     
                <a type="submit"  class="btn btn-danger" href="">ELIMINAR</a>
            </td>  
        </tr>
        @endforeach
    </table>
</div>

<!--ASIGNAR HORARIO-->  
    <div class="box">
    <div class="container-1">     
            <form action="{{route('asignar')}}" method="GET">
                @csrf                    
                <input type="search" placeholder="Cuscar Codigo" name="CODIGO" requered/>
                <button type="submit" class="btn btn-success">Buscar</button>            
            </form>     
    </div>
    </div>

    <div class="py-4 container">
    <table class="table table-hover bg-light text-center">
    <thead class="bg-primary text-light">
        <tr>
        <th scope="col">COD EMPLEADO</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">GENERO</th>
        <th scope="col">AREA</th>
        <th scope="col">TURNO</th>        
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
        <tr>
            <td>{{$empleado->CODIGO}}</td>
            <td>{{$empleado->NOMBRE}}</td>            
            <td>{{$empleado->GENERO}}</td>
            <td>{{$empleado->AREA}}</td>
            <td>{{$empleado->turno}}</td>
            <td>
        </tr>
        @endforeach
    </table>
</div>
@endsection