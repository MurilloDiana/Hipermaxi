@extends('layouts.app')
@extends('layouts.partials.navbar_recusos_humanos')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
<div>
    <h1> -_-_- MEMORADUM HIPERMAXI -_-_- </h1>
</div></div>
<div class="wrapper wrapper-content animated fadeInCenter">
    <div class="row">
        <div class="col-lg-8">
            <div class="ibox ">
                <div class="ibox-title">
                    <div class="ibox-tools"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></div>
                </div>
                <div class="ibox-content">
                    <form >
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Codigo Empleado:</label>
                            <div class="col-sm-6">
                                <input type="text"  name="CODIGO" value="{{$empleado->CODIGO}}" readonly>
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Nombre Empleado:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$empleado->NOMBRE}}" disabled>
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Fecha Emision:</label>
                            <div class="col-sm-6">
                                <input type="date" value="{{$memo->fecha}}" >
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Motivo:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$falta->motivo}}" disabled>
                            </div>
                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Descripcion Detallada:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$memo->descripcion}}" size = 50 disabled>
                            </div>
                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Descripcion Falta:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$falta->tipo_falta}}" size = 50 disabled>
                            </div>
                        </div>
                    </form>
                </div>
                <button class="btn btn-light mt-3" onclick="window.print()">Imprimir</button>
            </div>
        </div>
    </div>
</div>

@endsection 