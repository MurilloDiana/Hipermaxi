@extends('layouts.app')
@extends('layouts.partials.navbar_administracion')
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
                <th class="cell100 column3">TIEMPO EXTRA</th>
                <th class="cell100 column4">BONO TIEMPO EXTRA</th>
                <th class="cell100 column5">FECHA FERIADO</th>
                <th class="cell100 column6">BONO FERIADO </th>
                <th class="cell100 column7">BONO ANTIGUEDAD</th>
                <th class="cell100 column7">BONO TOTAL</th>
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
                    <td class="cell100 column3">{{ $pe->tiempo_extra }}</td>
                    <td class="cell100 column4">{{ $pe->totalHorasExtras }}</td>
                    <td class="cell100 column5">{{ $pe->fecha_feriados }}</td>
                    <td class="cell100 column6">{{ $pe->totalFeriado }}</td>
                    <td class="cell100 column7">{{ $pe->BonoAntiguedad }}</td>
                    <td class="cell100 column8">{{ $pe->BonoTotal }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>

</div>
<input type ='button' class="btn1 btn-warning"  value = 'GenerarPago' onclick="location.href = '{{ route('registrarPagoAdciona0') }}'"/>
@endsection 