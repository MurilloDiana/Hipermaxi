@extends('layouts.master')
@section('title','vacaciones')
@section('content')

<table class="table">

  <tbody>
      @foreach ($datos as $dato)
      <tr>
        <td>{{$dato->CODIGO}}</td>
        <td>{{$dato->NOMBRE}}</td>
        <td>{{$dato->FECHA_NAC}}</td>
        <td>{{$dato->GENERO}}</td>
        <td>{{$dato->CI}}</td>
        <td>{{$dato->FECHA_ING}}</td>            
        <td>{{$dato->USUARIO}}</td>
        <td>{{$dato->NIVEL}}</td>
        <td>{{$dato->AREA}}</td>        
        
      @endforeach
</table>


<form action= {{ route('vacaciones.asignar')  }} method="POST">
    @csrf
    <H1>ASIGNAR VACACIONES</H1>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Codigo</label>
        <input type="text" class="form-control" placeholder="codigo" name="CODIGO">
      </div>
      <div class="form-group col-md-6">
        <label>Nombre</label>
        <input type="text" class="form-control" placeholder="Apellidos y nombres" name="NOMBRE">
      </div>
      <div class="form-group col-md-6">
        <label>Fechas salida</label>
        <input type="date" class="form-control" name="FECHA_NAC">
      </div>
      
   
      
      
 
    
      
    </div>
    <div class="form-group col-md-4">
        <label>Nivel</label>
        <select name="NIVEL" class="form-control">
          <option selected></option>
          <option value="1">RRHH</option>
          <option value="2">ADMINISTRACION</option>
          <option value="3">TRABAJADOR BASE</option>
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Dar Vacaciones</button>
   
  </form>
  </*  <button type="submit" class="btn btn-primary"> Ver Registro de Vacaciones</button>  */>

@endsection