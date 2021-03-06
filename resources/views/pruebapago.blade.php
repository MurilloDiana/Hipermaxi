@extends('layouts.app')
@extends('layouts.partials.navbar_recusos_humanos')
@section('content')
<link rel="stylesheet" type="text/css" href="css/style_asis.css">
<h2>BOLETA PAGO</h2>
    <form  action="{{ route('generapago') }}" method="POST" class="form-horizontal" role="form" >
        {{ csrf_field() }} 
        @method('POST')
        <div class="form-group">
            <h5>Buscar Nombres de Empleados</h5>
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
        <div class="form-group"><h5>Dias Trabajos</h5>
            <div class="col-lg-8">
                <input class="form-control" type="Number" name="dias" required maxlength="100">
            </div>
        </div>
<div>
    <button class="btn btn-light mt-3" type="submit" values="GENERAR">Registrar</button>  
    <button class="btn btn-light mt-3" onclick="window.print()">Imprimir</button>
</div>
    </form>
    <div class="middle-box text-center">
        <div class="m-t">     
                <form action="{{route('imp')}}" method="GET">
                    @csrf                    
                    <input type="search" placeholder="Buscar Codigo" name="CODIGO" requered/>
                    <button type="submit" class="btn btn-success">Buscar</button>            
                </form>     
        </div>
    </div>

@endsection 