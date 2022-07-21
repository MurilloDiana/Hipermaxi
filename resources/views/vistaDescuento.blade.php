@extends('layouts.app')
@extends('layouts.partials.navbar_administracion')
@section('content')
<link rel="stylesheet" type="text/css" href="css/style_asis.css">
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-6">
    <h2>LISTADO DE DESCUENTOS A EMPLEADOS </h2>
    </div>
    <div class="limiter"> 
        <div class="wrap-table100">
        <div class="table100 ver1 m-b-110">
        <div class="table100-head">
        <table>
        <thead>
            <tr class="row100 head">
            <th class="cell100 column1"> Nº </th>
            <th class="cell100 column2">NOMBRE & APELLIDO</th>
            <th class="cell100 column3">MONTO</th>
            <th class="cell100 column4">AFP</th>
            <th class="cell100 column5">MONTO x FALTA</th>
            <th class="cell100 column6">TOTAL</th>
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
                    <td class="cell100 column2">{{ $pe->NOMBRE }} </td>
                    <td class="cell100 column3">{{ $pe->sueldo }}</td>
                    <td class="cell100 column4">{{ $pe->AFP }}</td>
                    <td class="cell100 column5">{{ $pe->Total_falta }}</td>
                    <td class="cell100 column6">{{ $pe->Total_retraso }}</td>
                    <td class="cell100 column7">{{ $pe->Total_descuento }}</td>
                </tr>
                @endforeach
            </tbody>
           </table>
        </div>
    </div>
</div>
<input type ='button' class="btn1 btn-warning"  value = 'GenerarPermiso' onclick="location.href ='{{ route('registrardescuento') }}' "/>

@endsection 