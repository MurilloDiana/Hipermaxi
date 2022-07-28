@extends('layouts.app')
@extends('layouts.partials.navbar')
@section('content')
<div class="container">
    <h1 class="text-center">FORMULARIO DE REGISTRO</h1>                                
    <form action="{{route('registrar')}}" method="POST">
        {{csrf_field()}}
        @method('POST')
        <div class="middle-box ">
        <div class="form-group">
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
            <a href="{{route('empleado.index')}}" class="btn btn-danger float-end">CANCELAR</a>            
        </div>
    </form>
</div>
@endsection