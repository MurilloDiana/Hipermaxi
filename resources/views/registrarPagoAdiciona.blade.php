@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="css/style_asis.css">
<h3>HOJA CONTROL DE ADICION DE PAGOS</h3>
<form  action="{{ route('registrarPagoAdciona0') }}" method="POST" class="form-horizontal" role="form" >
    {{ csrf_field() }} 
    @method('POST')
    <div class="form-group">
        <label FOR="">NOMBRE DE EMPLEADO</label>
        <select name="id_empleado" id="inputid_empleado"  class="form-control" required="required">
            <option VALUE="">--------ESCOGA NOMBRE EMPLEADO--------<></option>
            @foreach ($empleados as $empleado )
                <option value="{{ $empleado['CODIGO'] }}">"{{ $empleado['NOMBRE'] }}"></option>  
            @endforeach
        </select>
    </div>
    <div class = "form-group">
    <label FOR="">TIEMPO EXTRA: </label>
    </div>
    <div clas="form-group">
    <label FOR="">TOTAL DE HORAS EXTRAS: </label>
    </div>
    <div clas="form-group">
    <label FOR="">FECHA DE FERIADO: </label>
    </div>
    <div clas="form-group">
    <label FOR="">TOTAL DE DIA FERIADO: </label>
    /div>
    <div clas="form-group">
    <label FOR="">BONO ANTIGUEDAD: </label>
    </div>

    <div class="mb-3 mt-4">                                        
        <button class="btn btn-light mt-3" type="submit" values="GENERAR">Registrar</button>        
    </div>





</form>


@endsection 