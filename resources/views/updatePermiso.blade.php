@extends('layouts.app-master')
@section('content')
<link rel="stylesheet" type="text/css" href="css/style_asis.css">
<h3>HOJA DE SOLICITUD DE PERMISO</h3>
    <form  action="{{ route('registra') }}" method="POST" class="form-horizontal" role="form" >
    {{ csrf_field() }} 
    @method('POST')
        <label FOR="">NOMBRE EMPLEADOS</label>
        <select name="id_empleado" id="inputid_empleado"  class="form-control" required="required">
        <option VALUE=" " >>--------ESCOGA NOMBRE EMPLEADO--------<</option>
            @foreach ($empleados as $empleado )
                <option value="{{ $empleado['CODIGO'] }}">"{{ $empleado['NOMBRE'] }}"></option>  
            @endforeach
        </select>
         <div class="mb-3 mt-4">                                        
            <button class="btn btn-light mt-3" type="submit" values="GENERAR">Updates</button>        
        </div>
    </form>           
@endsection