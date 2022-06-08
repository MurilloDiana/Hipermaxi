@extends('layouts.app-master')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col">Genero</th>
      <th scope="col">Cedula de Identidad</th>
      <th scope="col">Telefono</th>
      <th scope="col">Fecha de Ingreso</th>
      <th scope="col">Usuario</th>
      <th scope="col">Nivel</th>
      <th scope="col">Area</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($datos as $dato)
      <tr>
        <td>{{$dato->CODIGO}}</td>
        <td>{{$dato->NOMBRE}}</td>
        <td>{{$dato->FECHA_NAC}}</td>
        <td>{{$dato->GENERO}}</td>
        <td>{{$dato->CI}}</td>
        <td>{{$dato->TELEFONO}}</td>        
        <td>{{$dato->FECHA_ING}}</td>            
        <td>{{$dato->USUARIO}}</td>
        <td>{{$dato->NIVEL}}</td>
        <td>{{$dato->AREA}}</td>        
        <td>            
            <div>            
                <form method="POST" action="{{ url('eliminar/'.$dato->CODIGO) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
                </form>
            </div>                        
        </td>
        <td>            
            <div>            
                <a href="{{ url('editar_empleado/'.$dato->CODIGO) }}"class="btn btn-primary btn-sm">Editar</a>
            </div>                        
        </td>   
    </tr>
      @endforeach
</table>

<form action="{{route('registrar')}}" method="POST">
    {{csrf_field()}}
    @method('POST')
    <div>
        <input type="text" placeholder="nombre" name="NOMBRE">
    </div>    
    <div>
        <input type="date" name="FECHA_NAC" >
    </div>    
    <div>
        <select name="GENERO">
            
            <option value="M">M</option>
            <option value="F">F</option>
        </select>
    </div> 
    <div>
        <input type="number" placeholder="Cedula de Indentidad" name="CI">
    </div>    
    
    <div>
        <input type="email" placeholder="example@gmail.com" name="EMAIL">
    </div>    
    <div>
        <input type="numer" placeholder="telefono" name="TELEFONO">
    </div>    
    <div>
        <input type="text" placeholder="direccion" name="DIRECCION">
    </div>    
    <div>
        <input type="date" name="FECHA_ING">
    </div>    
    <div>
        <input type="text" placeholder="area" name="AREA">
    </div>    
    <div>
        <input type="number" placeholder="años de antiguedad" name="ANTIGUEDAD">
    </div>    
    <div>
        <input type="input" placeholder="Numero de usuario" name="USUARIO">
    </div>    
    <div>
        <input type="text" placeholder="contraseña" name="PASSWORD">
    </div>    
    <div>
        <select name="NIVEL">
            <option value="1">RRHH</option>
            <option value="2">ADMINISTRADOR</option>
            <option value="3">TRABAJADOR BASE</option>            
        </select>
    </div> 
    <div>                
        <button class="btn btn-primary" type="submit" values="registrar">Registrar</button>        
    </div>
</form>
@endsection