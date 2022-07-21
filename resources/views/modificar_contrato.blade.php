@extends('layouts.app')
@extends('layouts.partials.navbar_recusos_humanos')
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
                    <form action="{{ url('/admin/registrarContrato') }}" method="POST">
                        {{csrf_field()}}
                        @method('POST')
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Codigo Empleado:</label>
                            <div class="col-sm-6">
                                <input type="text"  name="CODIGO" value="{{$contrato->CODIGO}}" readonly>
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Nombre Completo:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$contrato->NOMBRE}}" disabled>
                            </div>
                        
                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Fecha de Nacimiento:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$contrato->FECHA_NAC}}" disabled>
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Carnet de Identidad:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$contrato->CI}}" disabled>                                
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Genero</label>
                            <div>
                                <select value="{{$contrato->GENERO}}" disabled>
                                    <option value="M">M</option>
                                    <option value="F">F</option>
                                </select>
                            </div> 

                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Email:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$contrato->EMAIL}}" disabled>                                 
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Direccion:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$contrato->DIRECCION}}" disabled>
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Telefono:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$contrato->TELEFONO}}" disabled>
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">*</i>Inicio del Contrato:</label>
                            <div class="col-sm-6">
                                <input type="date" name="inicio_contrato" value="{{$contrato->inicio_contrato}}">
                            </div>
                            
                            <label class="col-sm-4 col-form-label"><i class="text-danger">*</i>Final del Contrato:</label>                            
                            <div class="col-sm-6">
                                <input type="date" name="final_contrato" value="{{$contrato->final_contrato}}" >
                            </div>
                            
                            <label class="col-sm-4 col-form-label"><i class="text-danger">*</i> Area Laboral:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$contrato->AREA}}" disabled>                                
                            </div>                            
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-2">            
                                <a href="{{route('contrato.index')}}" class="btn btn-danger float-end">CANCELAR</a>
                                <button type="submit" class="btn btn-primary">REGISTRAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection