@extends('layouts.app')
@extends('layouts.partials.navbar_recusos_humanos')
@section('content')
<link rel="stylesheet" type="text/css" href="css/style_asis.css">
<h1>GENERADOR DE DESCUENTOS</h1>
    <form  action="{{ route('geenrardescuento') }}" method="POST" class="form-horizontal" role="form" >
    {{ csrf_field() }} 
    @method('POST')
    <select name="id_empleado" id="inputid_empleado"  class="form-control" required="required">
        <option VALUE="">--------ESCOGA NOMBRE EMPLEADO--------<></option>
        @foreach ($empleados as $empleado )
            <option value="{{ $empleado['CODIGO'] }}">"{{ $empleado['NOMBRE'] }}"></option>  
        @endforeach
    </select>   
    <div class="form-group">
        <h4>Numero de faltas:</h4>
        <label class="col-lg-3 control-label">Numero de faltas:</label>
        <div class="col-lg-8" >
            <input class="form-control" type="number" name="faltas" >
        </div>
    </div>
    <div class="form-group">
        <h4>Tiempo atraso:</h4>
        <label class="col-lg-3 control-label">Numero de faltas:</label>
        <div class="col-lg-8" >
            <input class="form-control" type="time" name="tiempo_desc" >
        </div>
    </div>

    <div class="mb-3 mt-4">                                        
        <button class="btn btn-light mt-3" type="submit" values="GENERAR">Registrar</button>        
    </div>
    </form>


           
@endsection 