@extends('layouts.master')
@section('title', 'usuario')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>antiguedad</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Genero</th>
            <th scope="col">Cedula de Identidad</th>
            <th scope="col">Telefono</th>
            <th scope="col">Fecha de Ingreso</th>
            <th scope="col">Usuario</th>
            <th scope="col">Nivel</th>
            <th scope="col">Area</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($datos as $dato)
            <tr>
              <td>{{$dato->CODIGO}}</td>
              <td>{{$dato->NOMBRE}}</td>
              <td>{{$dato->FECHA_NAC}}</td>
              <td>{{$dato->GENERO}}</td>
              <td>{{$dato->CI}}</td>
              <td>{{$dato->TELEFONO}}</td>        
              <td>{{$dato->FECHA_ING}}</td>            
              <td>{{$dato->USUARIO}}</td>
              <td>{{$dato->NIVEL}}</td>
              <td>{{$dato->AREA}}</td>        
               
          </tr>
            @endforeach
      </table>
</form>
</body>
</html>
@endsection