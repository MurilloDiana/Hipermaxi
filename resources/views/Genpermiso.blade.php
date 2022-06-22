@extends('layouts.app-master')
@section('content')
<link rel="stylesheet" type="text/css" href="css/style_asis.css">
<h3>HOJA DE SOLICITUD DE PERMISO</h3>
            <form class="form-horizontal" role="form">
               <div class="form-group">
                <label class="col-lg-3 control-label">Nombre Empleado:</label>
                          <div class="col-lg-8">
                              <input class="form-control" type="text" value=" ">
                          </div>
                      </div>
               </div>

               <div class="form-group">
                  <label class="col-lg-3 control-label">Celula Identidad:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" value=" ">
                            </div>
                    </div>

                    <div class="form-group">
                       <label class="col-lg-3 control-label">Rol:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="RRHH-ADM-EMP">
                        </div>
                    </div>
                    <div class="form-group">
                            <label class="col-lg-3 control-label">Fecha Inicio:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="DD-MM-YYYY">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Fecha Fin:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="DD-MM-YYYY">
                            </div>
                    </div>
            </form>
        </div>
        <label class="col-lg-3 control-label">Foto de Documento:</label>
        <div class="col-lg-8">
            <div class="text-center">
                <input type="file" class="btn btn-primary">
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Guardar"
    </div>
</div>

           
@endsection 