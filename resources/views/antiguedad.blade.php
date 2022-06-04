@extends('layouts.master')
@section('title', 'usuario')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Antiguedad</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($datos as $dato)
      <tr>
        <td>{{$dato->NOMBRE}}</td>  
        <td>{{$dato->ANTIGUEDAD}}</td>    
    </tr>
      @endforeach
</table>
@endsection