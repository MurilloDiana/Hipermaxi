@extends('layouts.app')
@section('content')
<style>
    .modal-header {
        background: #F7941E;
        color: #fff;
    }
    
    .required:after {
        content: "*";
        color: red;
    }
</style>
<div class="fondo_transparente">
    <div class="modal">
        <div class="modal_cerrar">
            <span>x</span>
        </div>
        <div class="modal_titulo">VENTANA MODAL</div>
        <div class="modal_mensaje">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit, nam? Minus nihil temporibus, minima reprehenderit, rem explicabo earum nemo debitis, maxime deserunt quidem. Quia odit quae voluptate nobis sit beatae!</p>
        </div>
        <div class="modal_botones">
            <a href="" class="boton">COMPARTIR</a>
            <a href="" class="boton">ACEPTAR</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h1 class="text-center">Reporte de Faltas</h1>
    </div>
    <div class="col-12">
        <form action="attendance_report.php" class="form-inline mb-2">
            <label for="start">Fecha Inicio:&nbsp;</label>
            <input required id="start" type="date" name="start"  class="form-control mr-2">
            <label for="end">Fecha Fin:&nbsp;</label>
            <input required id="end" type="date" name="end" class="form-control">
            <button class="btn btn-success ml-2">Filtrar</button>
        </form>
    </div>
    <div class="col-12">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Trabajador</th>
                        <th>Area</th>
                        <th>Fecha de Falta</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>
                                Aquiles Bailo
                            </td>
                            <td>
                                Administrador
                             </td>
                            <td>
                               dd/mm/aa
                            </td>
                            <td>
                                    <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModalPopovers">Revisar</button>
                                    <button type="button" class="btn btn-info">Info</button>
                                    <button type="button" class="btn btn-primary">Primary</button>                               
                            </div> 
                            </td>
                        </tr>         
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal-body">
        <h5>Popover in a modal</h5>
        <p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" onclick="location.href ='{{ route('generar') }}' " data-bs-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
        <hr>
        <h5>Tooltips in a modal</h5>
        <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
      </div>
      
  
  

@endsection 