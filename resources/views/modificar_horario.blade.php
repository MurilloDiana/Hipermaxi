@extends('layouts.app')

@section('content')
    <form action="{{ url('/manager/actualizar_horario/'.$empleado->CODIGO) }}" method="POST">
        {{csrf_field()}}
        @method('PUT')
        <div>
            <input type="text" placeholder="nombre" name="NOMBRE" value="{{$empleado->NOMBRE}}" disabled>
        </div>    
        <div>
            <input type="date" name="FECHA_NAC"  value="{{$empleado->FECHA_NAC}}" disabled >
        </div>    
        <div>
            <select name="GENERO" value="{{$empleado->GENERO}}" disabled>
                <option value="M">M</option>
                <option value="F">F</option>
            </select>
        </div> 
        <div>
            <input type="number" placeholder="Cedula de Indentidad" name="CI" value="{{$empleado->CI}}" disabled>
        </div>    
        
        <div>
            <input type="email" placeholder="example@gmail.com" name="EMAIL" value="{{$empleado->EMAIL}}" disabled>
        </div>    
        <div>
            <input type="numer" placeholder="telefono" name="TELEFONO" value="{{$empleado->TELEFONO}}" disabled>
        </div>    
        <div>
            <input type="text" placeholder="direccion" name="DIRECCION" value="{{$empleado->DIRECCION}}" disabled>
        </div>    
        <div>
            <input type="date" name="FECHA_ING" value="{{$empleado->FECHA_ING}}" disabled>
        </div>    
        <div>
            <input type="text" placeholder="area" name="AREA" value="{{$empleado->AREA}}" disabled>
        </div>        
        <div>
            <select name="id_horario" value="{{$empleado->id_horario}}">
                <option value="1">Mañana</option>
                <option value="2">Tarde</option>
                <option value="3">Noche</option>            
            </select>
        </div>         
        <div>        
            <a href="{{route('horario.index')}}" class="btn btn-danger float-end">CANCELAR</a>
            <button type="submit" class="btn btn-primary">ACTUALIZAR</button>       
        </div>
    </form>
@endsection