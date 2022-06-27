@extends('layouts.app-master')
@section('content')
<link rel="stylesheet" type="text/css" href="css/style_asis.css">
<link rel="stylesheet" type="text/css" href="css/style_asis.css">
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-6">
    <h2>Empleados Con Permiso </h2>
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
        <th class="cell100 column2">ROL</th>
        <th class="cell100 column2">ASUNTO</th>
        <th class="cell100 column2">FECHA_INICIO</th>
        <th class="cell100 column2">FECHA_FIN</th>
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
        @foreach ($pess as $pe )
        <tr class="row100 head">
            <td class="cell100 column1"> {{ $loop->iteration }} </td>
            <td class="cell100 column2">{{ $pe->NOMBRE }}</td>
            <td class="cell100 column2">{{ $pe->area }}</td>
            <td class="cell100 column2">{{ $pe->asunto }}</td>
            <td class="cell100 column2">{{ $pe->fecha_ini }}</td>
            <td class="cell100 column2">{{ $pe->fecha_fin }}</td>
            <td class="cell100 column2">{{ $pe->DIAS }}</td>
        </tr>
        @endforeach
            </tbody>
           </table>
        </div>
       </div>
</div>

<input type ='button' class="btn1 btn-warning"  value = 'GenerarPermiso' onclick="location.href = '{{ route('Genpermiso.index') }}'"/>
@endsection 