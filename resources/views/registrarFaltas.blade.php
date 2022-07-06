@extends('layouts.app')
@section('content')
<div class="container">
<h1>FALTAS</h1>
<form action="{{route('asignarFalta')}}" method="POST">
        {{csrf_field()}}
        @method('POST')
        <div class="mb-3 mt-4">
            <label for="exampleInputEmail1" class="form-label">CODIGO USUARIO</label>
            <input type="text" class="form-control" name="id_usuario">
        </div>    
        <div class="mb-3 mt-4">
            <div>
                <label for="exampleInputEmail1" class="form-label">MOTIVO</label>
            </div>
            <textarea name="motivo" class="md-textarea form-control" rows="5"></textarea>            
        </div>    
        <div class="mb-3 mt-4">
            <label for="exampleInputEmail1" class="form-label">DIA FALTADO</label>
            <input type="date" name="dia_faltado">
        </div> 
        <div class="mb-3 mt-4">
            <label for="exampleInputEmail1" class="form-label">TIPO DE FALTA</label>
            <select name="tipo_falta">
                <option value="justificada">justificada</option>
                <option value="injustificada" selected>injustificada</option>                
            </select>
        </div>    
        <div class="mb-3 mt-4">
            <label for="exampleInputEmail1" class="form-label">COMPROBANTE</label>
            <input type="file" name="comprobante">
        </div>    

        <div class="mb-3 mt-4">                                        
            <button class="btn btn-light mt-3" type="submit">Registrar</button>        
        </div>
    </form>     
    </div>
@endsection