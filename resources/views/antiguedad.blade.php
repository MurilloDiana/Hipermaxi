@extends('layouts.master')
@section('title', 'usuario')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Antiguedad</title>
  <link rel="stylesheet" href="{{asset('css/style_antiguedad.css')}}">
</head>
<body>
  <div id="main-container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Fecha de Ingreso</th>
        <th scope="col">Antiguedad</th>
      
      </tr>
    </thead>
    <tbody>
        @foreach ($datos as $dato)
        <tr>
          <td>{{$dato->NOMBRE}}</td>
          <td>{{$dato->FECHA_ING}}</td>    
          <td>{{$dato->ANTIGUEDAD}}</td>
      </tr>
        @endforeach
  </table>
  </div>
</body>
</html>
@endsection