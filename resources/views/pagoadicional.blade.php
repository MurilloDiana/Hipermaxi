@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="css/style_asis.css">
<link rel="stylesheet" type="text/css" href="css/style_asis.css">
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-6">
        <h1> Listado de Pagos Adicionales De Empleados </h1>
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
                <th class="cell100 column2">CI</th>
                <th class="cell100 column2">AREA</th>
                <th class="cell100 column2">INGRESO</th>
                <th class="cell100 column6">BONO EXTRA </th>
                <th class="cell100 column2">TOTAL</th>
                </tr>
        </thead>
        </table>
        </div>
        </div>
        </div>
    <div class="table100-body js-pscroll">
        <table>
            <tbody>

            </tbody>
        </table>
    </div>
</div>
</div>

</div>
<input type ='button' class="btn1 btn-warning"  value = 'GenerarPago' onclick="location.href = '{{ route('registrarPagoAdciona.index') }}'"/>
@endsection 