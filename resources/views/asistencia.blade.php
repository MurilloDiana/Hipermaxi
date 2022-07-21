@extends('layouts.app-master')
@extends('layouts.partials.navbar_administracion')
@section('content')
<link rel="stylesheet" type="text/css" href="css/tablita.css">
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-6">
    <h2>Asistencia de Empleados</h2>
    </div>
    <div class="limiter">
        
        <div class="wrap-table100">
        <div class="table100 ver1 m-b-110">
        <div class="table100-head">
        <table>
        <thead>
        <tr class="row100 head">
        <th class="cell100 column1"> ID </th>
        <th class="cell100 column2">NOMBRE & APELLIDO</th>
        <th class="cell100 column3"> ROL </th>
        <th class="cell100 column4"> FECHA </th>
        <th class="cell100 column5">RETRASO </th>
        <th class="cell100 column6"> N° DIAS </th>
        </tr>
        </thead>
    </table>
        </div>
            </div>
        </div>
       <div class="table100-body js-pscroll">
           <table>
            <tbody>
                @foreach ($empleado as $NombreEmpleado)
                <tr class="row100 body">
                    <td class="cell100 column1">{{$NombreEmpleado->CODIGO}}</td>
                    <td class="cell100 column2">{{$NombreEmpleado->NOMBRE}}</td>
                    <td class="cell100 column3">{{$NombreEmpleado->NIVEL}}</td>
                    <td class="cell100 column4">{{$NombreEmpleado->fecha}}</td>
                    <td class="cell100 column5">{{$NombreEmpleado->tiempo}}</td>
                    <td class="cell100 column6">{{$NombreEmpleado->total_dias}}</td>
                </tr>
                @endforeach
            </tbody>
           </table>
        </div>
       </div>
    

</div>

   @endsection 