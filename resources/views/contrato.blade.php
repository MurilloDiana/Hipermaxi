@extends('layouts.app')
@section('content')
<!--ASIGNAR HORARIO-->  

    <div class="box">
    <div class="container-1">     
            <form action="{{route('asignarContrato')}}" method="GET">
                @csrf                    
                <input type="search" placeholder="Cuscar Codigo" name="CODIGO" requered/>
                <button type="submit" class="btn btn-success">Buscar</button>            
            </form>     
    </div>
</div>

<div class="py-4">
    <table class="table table-hover bg-light text-center">
        <thead class="bg-primary text-light">
            <tr>
            <th scope="col">Codigo Empleado</th>    
            <th scope="col">Nombre</th>    
            <th scope="col">Fecha de Nacimiento</th>    
            <th scope="col">Cedula de Identidad</th>
            <th scope="col">Genero</th>
            <th scope="col">Direccion</th>
            <th scope="col">Area</th>
            <th scope="col">Inicio del contrato</th>
            <th scope="col">Final del contrato</th>            
            <th scope="col">Modificar Contrato</th>            
            <th scope="col">Eliminar Contrato</th>            
            </tr>
        </thead>
    <tbody>
        @foreach ($datos as $dato)
        <tr>
            <td>{{$dato->CODIGO}}</td>
            <td>{{$dato->NOMBRE}}</td>
            <td>{{$dato->FECHA_NAC}}</td>
            <td>{{$dato->CI}}</td>
            <td>{{$dato->GENERO}}</td>            
            <td>{{$dato->DIRECCION}}</td>
            <td>{{$dato->AREA}}</td>
            <td>{{$dato->inicio_contrato}}</td>
            <td>{{$dato->final_contrato}}</td>
            <td>            
                <a type="submit"  class="btn btn-success" href="{{ url('/admin/editar_empleado/'.$dato->CODIGO) }}"> Editar</a>
            </td>  
            <td>           
                <form method="POST" action="{{  url('/admin/eliminarContrato/'.$dato->CODIGO)}}">                
                @csrf
                @method('DELETE')                
                <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>                
            </td>
        </tr>
        @endforeach
    </table>
@endsection 