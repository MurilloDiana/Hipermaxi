@extends('layouts.master')
@section('title', 'empleado')
@section('content')
<form action="NuevoRegistroEmpleado" method="POST">
  @csrf
  <H1>DATOS PERSONALES</H1>
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
      <label>Fechas de Nacimiento</label>
      <input type="date" class="form-control" name="FECHA_NAC">
    </div>
    <div class="form-group col-md-6">
      <label>Genero</label>
      <select name="GENERO" class="form-control">
        <option selected></option>
        <option>M</option>
        <option>F</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label>Cedula de Indentidad</label>
      <input type="text" class="form-control" name="CI" placeholder="CI">
    </div>
    <div class="form-group col-md-6">
      <label>Correo Electronico</label>
      <input type="email" class="form-control" placeholder="example@gmail.com" name="EMAIL">
    </div>
    <div class="form-group col-md-6">
      <label >Telefono</label>
      <input type="text" class="form-control" name="TELEFONO" placeholder="telefono">
    </div>
    <div class="form-group col-md-6">
      <label >Direccion</label>
      <input type="text" class="form-control" name="DIRECCION" placeholder="direccion">
    </div>
    <div class="form-group col-md-6">
      <label >Fecha de Ingreso</label>
      <input type="date" class="form-control" name="FECHA_ING">
    </div>
    <div class="form-group col-md-6">
      <label >Area</label>
      <input type="text" class="form-control" name="AREA" placeholder="area laboral">
    </div>
    <div class="form-group col-md-6">
      <label >Antiguedad</label>
      <input type="text" class="form-control" name="ANTIGUEDAD" placeholder="año de antiguedad">
    </div>
    <div class="form-group col-md-6">
      <label >Usuario</label>
      <input type="text" class="form-control" name="USUARIO" placeholder="usuario">
    </div>
    <div class="form-group col-md-6">
      <label>Password</label>
      <input type="password" class="form-control" name="CONTRASEÑA" placeholder="Password">
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
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
@endsection