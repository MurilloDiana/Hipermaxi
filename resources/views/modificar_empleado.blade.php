@extends('layouts.master')
@section('title', 'modificar empleado')
@section('content')
<form action="{{ url('actualizar_empleado/'.$usuario->CODIGO) }}" method="POST">
    {{csrf_field()}}
    @method('PUT')
    <div>
        <input type="text" placeholder="nombre" name="NOMBRE" value="{{$usuario->NOMBRE}}">
    </div>    
    <div>
        <input type="date" name="FECHA_NAC"  value="{{$usuario->FECHA_NAC}}">
    </div>    
    <div>
        <select name="GENERO" value="{{$usuario->GENERO}}">            
            <option value="M">M</option>
            <option value="F">F</option>
        </select>
    </div> 
    <div>
        <input type="number" placeholder="Cedula de Indentidad" name="CI" value="{{$usuario->CI}}">
    </div>    
    
    <div>
        <input type="email" placeholder="example@gmail.com" name="EMAIL" value="{{$usuario->EMAIL}}">
    </div>    
    <div>
        <input type="numer" placeholder="telefono" name="TELEFONO" value="{{$usuario->TELEFONO}}">
    </div>    
    <div>
        <input type="text" placeholder="direccion" name="DIRECCION" value="{{$usuario->DIRECCION}}">
    </div>    
    <div>
        <input type="date" name="FECHA_ING" value="{{$usuario->FECHA_ING}}">
    </div>    
    <div>
        <input type="text" placeholder="area" name="AREA" value="{{$usuario->AREA}}">
    </div>    
    <div>
        <input type="number" placeholder="años de antiguedad" name="ANTIGUEDAD" value="{{$usuario->ANTIGUEDAD}}">
    </div>    
    <div>
        <input type="input" placeholder="Numero de usuario" name="USUARIO" value="{{$usuario->USUARIO}}">
    </div>    
    <div>
        <input type="text" placeholder="contraseña" name="PASSWORD">
    </div>    
    <div>
        <select name="NIVEL" value="{{$usuario->NIVEL}}">
            <option value="1">RRHH</option>
            <option value="2">ADMINISTRADOR</option>
            <option value="3">TRABAJADOR BASE</option>            
        </select>
    </div> 
    <div>        
        <a href="{{ url('empleado') }}" class="btn btn-danger float-end">CANCELAR</a>
        <button type="submit" class="btn btn-primary">ACTUALIZAR</button>       
    </div>
</form>
@endsection