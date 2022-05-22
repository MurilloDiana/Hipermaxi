@extends('layouts.master')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-6">
        <h2>Contrato Laboral</h2>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInCenter">
    <div class="row">
        <div class="col-lg-8">
            <div class="ibox ">
                <div class="ibox-title">
                    
                    <div class="ibox-tools"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></div>
                </div>
                <div class="ibox-content">
                    <form  method="post">
                        @csrf

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Nombre Completo:</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Introduzca Nombre Completo" name="txtPersona" id="txtPersona" value="" class="typeahead_2 form-control" />
                                <input type="hidden" name="id" id="id" value="">
                            </div>
                        
                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Fecha de Nacimiento:</label>
                            <div class="col-sm-6">
                                <input type="date" placeholder="Introduzca Nombre Completo" name="txtPersona" id="txtPersona" value="" class="typeahead_2 form-control" />
                                <input type="hidden" name="id" id="id" value="">
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Carnet de Identidad:</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Introduzca Carnet de Identidad" name="txtPersona" id="txtPersona" value="" class="typeahead_2 form-control" />
                                <input type="hidden" name="id" id="id" value="">
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Genero</label>
                            <div class="col-sm-6">
                                <div class="i-checks">
                                    <label> <input type="radio" value="1" name="activo" > <i></i>F</label>&nbsp;&nbsp;
                                    <label> <input type="radio" value="0" name="activo" > <i></i>M</label>
                                </div>
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Email:</label>
                            <div class="col-sm-6">
                                <input type="email" placeholder="Introduzca Correo Electronico" name="txtPersona" id="txtPersona" value="" class="typeahead_2 form-control" />
                                <input type="hidden" name="id" id="id" value="">
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Direccion:</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Introduzca Direccion" name="txtPersona" id="txtPersona" value="" class="typeahead_2 form-control" />
                                <input type="hidden" name="id" id="id" value="">
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Telefono:</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Introduzca Telefono" name="txtPersona" id="txtPersona" value="" class="typeahead_2 form-control" />
                                <input type="hidden" name="id" id="id" value="">
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">*</i> Tipo de Contrato:</label>
                            <div class="col-sm-6">
                                <select class="form-control"  name="perfil_id"  id="perfil_id">
                                    <option value="" > Indefinido</option>
                                    <option value="" > Por Obra</option>
                                    <option value="" > 3 meses</option>
                                </select>
                            </div>
                            

                            <label class="col-sm-4 col-form-label"><i class="text-danger">*</i> Area Laboral:</label>
                            <div class="col-sm-6">
                                <select class="form-control"  name="perfil_id"  id="perfil_id">
                                    <option value="" > Panaderia</option>
                                    <option value="" > Cajero</option>
                                    <option value="" > Fiambreria</option>
                                    <option value="" > Carniceria</option>
                                </select>
                            </div>
                            
                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Foto del Contrato:</label>
                            <div class="col-sm-6">
                                <input type="file"  name="imagen"   />
                                
                            </div>
                            
                        </div>
                       
        


                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-success " type="submit">Guardar</button>
                                <button class="btn btn-danger " type="button" >Cancelar</button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
    


