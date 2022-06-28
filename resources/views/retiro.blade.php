@extends('layouts.master')
@section('title','vacaciones')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-6">
        <h2>Retiro de Personal</h2>
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
                        
                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Fecha de Retiro:</label>
                            <div class="col-sm-6">
                                <input type="date" placeholder="Introduzca Nombre Completo" name="txtPersona" id="txtPersona" value="" class="typeahead_2 form-control" />
                                <input type="hidden" name="id" id="id" value="">
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Carnet de Identidad:</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Introduzca Carnet de Identidad" name="txtPersona" id="txtPersona" value="" class="typeahead_2 form-control" />
                                <input type="hidden" name="id" id="id" value="">
                            </div>
                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Codigo:</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Introduzca su Codigo ID" name="txtPersona" id="txtPersona" value="" class="typeahead_2 form-control" />
                                <input type="hidden" name="id" id="id" value="">
                            </div>

             
                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Motivo de la renuncia:</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Cite el motivo de la renuncia" name="txtPersona" id="txtPersona" value="" class="typeahead_2 form-control" />
                                <input type="hidden" name="id" id="id" value="">
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">*</i> Tipo de Renuncia:</label>
                            <div class="col-sm-6">
                                <select class="form-control"  name="perfil_id"  id="perfil_id">
                                    <option value="" > Retiro  por Despido</option>
                                    <option value="" > Renuncia Voluntario</option>
                         ]
                                </select>
                            </div>

     
                            
                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Foto de la carta de renuncia
                                :</label>
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

@endsection