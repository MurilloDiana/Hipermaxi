@extends('layouts.app')
@section('content')
<div class="py-4">
    <table class="table table-hover bg-light text-center">
        <thead class="bg-primary text-light">
            <tr>
            <th scope="col">CODIGO USUARIO</th>
            <th scope="col">MOTIVO</th>
            <th scope="col">DIA FALTADO</th>   
            <th scope="col">TIPO DE FALTA</th>
            <th scope="col">COMPROBANTE</th>            
            </tr>
        </thead>
    <tbody>
        @foreach ($datos as $dato)
        <tr>
            <td>{{$dato->id_usuario}}</td>
            <td>{{$dato->motivo}}</td>
            <td>{{$dato->dia_faltado}}</td>
            <td>{{$dato->tipo_falta}}</td>
            <td>{{$dato->comprobante}}</td>                                    
        </tr>
        @endforeach
    </table>
    <div>
        {{ $datos->links() }}
    </div>
</div>
@endsection