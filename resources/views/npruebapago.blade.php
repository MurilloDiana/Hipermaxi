@extends('layouts.app')
@extends('layouts.partials.navbar_recusos_humanos')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
<div>
    <h1> BOLETA DE PAGO _ HIPERMAXI </h1>
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
                    <form >
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Codigo Empleado:</label>
                            <div class="col-sm-6">
                                <input type="text"  name="CODIGO" value="{{$empleado->CODIGO}}" readonly>
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Nombre Completo:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$empleado->NOMBRE}}" disabled>
                            </div>
                        
                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Fecha Emision:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$boleta->fecha_emision}}" >
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Sueldo:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$sueldo->Sueldo}}" disabled>
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Bono Horas Extras:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$pagoadicional->totalHorasExtras}}" disabled>                                
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Bono Feriado:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$pagoadicional->totalFeriado}}" disabled>                                 
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Bono Antiguedad:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$pagoadicional->BonoAntiguedad}}" disabled>
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Total Adicionales:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$pagoadicional->BonoTotal}}" disabled>
                            </div>

                            <label class="col-sm-4 col-form-label"><i class="text-danger">*</i>AFP:</label>
                            <div class="col-sm-6">
                                <input type="text" name="inicio_contrato" value="{{$descuento->AFP}}" disabled>
                            </div>
                            
                            <label class="col-sm-4 col-form-label"><i class="text-danger">*</i>Descuento x Falta:</label>                            
                            <div class="col-sm-6">
                                <input type="text" name="final_contrato" value="{{$descuento->Total_falta}}" disabled>
                            </div>
                            
                            <label class="col-sm-4 col-form-label"><i class="text-danger">*</i> Descuento x retraso:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$descuento->Total_retraso}}" disabled>                                
                            </div>       
                            <label class="col-sm-4 col-form-label"><i class="text-danger">*</i> Total de Descuento:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$descuento->Total_descuento}}" disabled>                                
                            </div> 
                            <label class="col-sm-4 col-form-label"><i class="text-danger">*</i> Total:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$boleta->monto_total}}" disabled>                                
                            </div>       
                            
                            <label class="col-sm-4 col-form-label"><i class="text-danger">* </i> Fecha recibido:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$boleta->fecha_recibido}}" >
                            </div>
                        </div>
                    </form>
                    <button class="btn btn-light mt-3" onclick="window.print()">Imprimir</button> 
                </div>
            </div>
        </div>
    </div>    
</div>

@endsection 