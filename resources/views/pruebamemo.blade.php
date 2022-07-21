@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="css/style_asis.css">
<h2>REGISTRO DE MEMORANDUM</h2>
    <form  action="{{ route('memorandumregistro') }}" method="POST" class="form-horizontal" role="form" >
        {{ csrf_field() }} 
        @method('POST')
        <div class="form-group">
            <h3>Buscar Nombres de Empleados</h3>
            <label FOR=""></label>
                        <select name="id_empleado" id="inputid_empleado"  class="form-control" required="required">
                            <option VALUE="">--------ESCOGA NOMBRE EMPLEADO--------<></option>
                            @foreach ($empleados as $empleado )
                                <option value="{{ $empleado['CODIGO'] }}">"{{ $empleado['NOMBRE'] }}"></option>  
                            @endforeach
                        </select>
        </div>
        <div class="form-group"><h5>Fecha Emision</h5>
            <div class="col-lg-8">
                <input class="form-control" type="Date" name="fecha" required maxlength="100">
            </div>
        </div>
        <div class="form-group"><h5>Descripcion</h5>
            <div class="col-lg-8">
                <input class="form-control" type="text" name="desc" required maxlength="100">
            </div>
        </div>
<div>
    <button class="btn btn-light mt-3" type="submit" values="GENERAR">Registrar</button>  
</div>
    </form>

@endsection 