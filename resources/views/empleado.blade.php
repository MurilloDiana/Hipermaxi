@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">FORMULARIO DE REGISTRO</h1>                                
    <form action="{{route('registrar')}}" method="POST">
        {{csrf_field()}}
        @method('POST')
        <div class="middle-box ">
        <div class="input-group">
            <label for="name" class="form-label">NOMBRE COMPLETO</label>
            <input type="text" name="NOMBRE" id="name">
        </div>    
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">FECHA DE NACIMIENTO</label>
            <input type="date" class="form-control" name="FECHA_NAC" >
        </div>    
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">GENERO</label>
            <select name="GENERO" class="form-control">                            
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
        </div> 
        <div class="mb-3 mt-4">
            <label for="exampleInputEmail1" class="form-label">CEDULA DE IDENTIDAD</label>
            <input type="number" class="form-control" name="CI">
        </div>    
        
        <div class="mb-3 mt-4">
            <label for="exampleInputEmail1" class="form-label">CORREO ELECTRONICO</label>
            <input type="email" class="form-control" name="EMAIL">
        </div>    
        <div class="mb-3 mt-4">
            <label for="exampleInputEmail1" class="form-label">TELEFONO</label>
            <input type="number" class="form-control" name="TELEFONO">
        </div>    
        <div class="mb-3 mt-4">
            <label for="exampleInputEmail1" class="form-label">DIRECCION</label>
            <input type="text" class="form-control" name="DIRECCION">
        </div>    
        <div class="mb-3 mt-4">
            <label for="exampleInputEmail1" class="form-label">FECHA DE INGRESO</label>
            <input type="date" class="form-control" name="FECHA_ING">
        </div>    
        <div class="mb-2 mt-4">
            <label for="exampleInputEmail1" class="form-label">AREA</label>
            <input type="text" class="form-control" name="AREA">
        </div>
    </div>
        <div class="mb-3 mt-4">                                        
            <button class="btn btn-success mt-3" type="submit">Registrar</button>        
        </div>
    </form>
</div>

<div class="middle-box text-center">
  <div class="m-t">     
    <H2> TABLA DE USUARIOS</H2>
        <form action="{{route('buscar')}}" method="GET">
            @csrf                    
            <input type="search" placeholder="Buscar Codigo" name="CODIGO" requered/>
            <button type="submit" class="btn btn-success">Buscar</button>            
        </form>     
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