@extends('layouts.master')
@section('title', 'usuario')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col">Genero</th>
      <th scope="col">Cedula de Identidad</th>
      <th scope="col">Telefono</th>
      <th scope="col">Fecha de Ingreso</th>
      <th scope="col">Usuario</th>
      <th scope="col">Cargo</th>
      <th scope="col">Area</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($datos as $dato)
      <tr>
        <th scope="row">{{$dato->CODIGO}}</th>
        <td>{{$dato->CODIGO}}</<td>
        <td>{{$dato->NOMBRE}}</<td>
        <td>{{$dato->FECHA_NAC}}</<td>
        <td>{{$dato->GENERO}}</<td>
        <td>{{$dato->CI}}</<td>
        <td>{{$dato->TELEFONO}}</<td>        
        <td>{{$dato->FECHA_ING}}</<td>            
        <td>{{$dato->USUARIO}}</<td>
        <td>{{$dato->NIVEL}}</<td>
        <td>{{$dato->AREA}}</<td>
    </tr>
      @endforeach
</table>
@endsection