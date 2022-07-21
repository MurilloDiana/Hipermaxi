@extends('layouts.app')
@extends('layouts.partials.navbar_recusos_humanos')
@section('content')
<div class="middle-box text-center">
  <div class="m-t">     
    <H2> LISTA DE EMPLEADOS</H2>
        <form action="{{route('buscar')}}" method="GET">
            @csrf                    
            <input type="search" placeholder="Buscar Codigo" name="CODIGO" requered/>
            <button type="submit" class="btn btn-success">Buscar</button>
        </form>                             
        <a type="submit"  class="btn btn-success" href="{{route('formulario.index')}}"> Registrar Empleado</a>
  </div>  
</div>

<div class="py-4">
    <table class="table table-bordered border-white table-hover text-center">
        <thead class="bg-dark text-white">
            <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Codigo</th>   
            <th scope="col">Genero</th>
            <th scope="col">Cedula de Identidad</th>
            <th scope="col">Telefono</th>
            <th scope="col">Fecha de Ingreso</th>        
            <th scope="col">Area</th>
            <th scope="col">Eliminar</th>
            <th scope="col">Editar</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($datos as $dato)
        <tr>
            <td>{{$dato->NOMBRE}}</td>
            <td>{{$dato->FECHA_NAC}}</td>
            <td>{{$dato->CODIGO}}</td>
            <td>{{$dato->GENERO}}</td>
            <td>{{$dato->CI}}</td>
            <td>{{$dato->TELEFONO}}</td>        
            <td>{{$dato->FECHA_ING}}</td>            
            <td>{{$dato->AREA}}</td>        
            <td>           
                <form method="POST" action="{{ url('/admin/eliminar/'.$dato->CODIGO) }}">                
                @csrf
                @method('DELETE')                
                <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>                
            </td>
            <td>            
                <a type="submit"  class="btn btn-success" href="{{ url('/admin/editar_empleado/'.$dato->CODIGO) }}"> Editar</a>
            </td>   
        </tr>
        @endforeach
    </table>
    <div>
        {{ $datos->links() }}
    </div>
</div>
@endsection