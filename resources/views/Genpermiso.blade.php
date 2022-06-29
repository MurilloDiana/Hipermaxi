@extends('layouts.app-master')
@section('content')
<link rel="stylesheet" type="text/css" href="css/style_asis.css">
<h3>HOJA DE SOLICITUD DE PERMISO</h3>
            <form  action="{{ route('registra') }}" method="POST" class="form-horizontal" role="form" >
              {{ csrf_field() }} 
              @method('POST')
                    <div class="form-group">
                            <label class="col-lg-3 control-label">Fecha Inicio:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="date" name="fecha_ini" required maxlength="100">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Fecha Fin:</label>
                            <div class="col-lg-8">
                               <input class="form-control" type="date" name="fecha_fin" required maxlength="100">
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Motivo:</label>
                            <div class="col-lg-8">
                               <input class="form-control" type="text" name="motivo" required maxlength="100">
                            </div>
                    </div>
                    <label class="col-lg-3 control-label">Foto de Documento:</label>
                        <div class="col-lg-8">
                            <div class="text-center">
                            <input type="file" class="btn btn-primary">
                            </div>
                        </div>
                    <div class="form-group">
                        <label FOR="">NOMBRE EMPLEADOS</label>
                        <select name="id_empleado" id="inputid_empleado"  class="form-control" required="required">
                            <option VALUE="">--------ESCOGA NOMBRE EMPLEADO--------<></option>
                            @foreach ($empleados as $empleado )
                                <option value="{{ $empleado['CODIGO'] }}">"{{ $empleado['NOMBRE'] }}"></option>  
                            @endforeach
                        </select>
                    </div>
        <div class="mb-3 mt-4">                                        
            <button class="btn btn-light mt-3" type="submit" values="GENERAR">Registrar</button>        
        </div>
            </form>
        </div>

    </div>
</div>

           
@endsection 