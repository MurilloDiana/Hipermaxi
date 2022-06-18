@extends('layouts.app')

@section('content')
    <form action="{{ url('/admin/actualizar_horario/'.$usuario->CODIGO) }}" method="POST">
        {{csrf_field()}}
        @method('PUT')
        <div>
            <input type="text" placeholder="nombre" name="NOMBRE" value="{{$usuario->NOMBRE}}" disabled>
        </div>    
        <div>
            <input type="date" name="FECHA_NAC"  value="{{$usuario->FECHA_NAC}}" disabled >
        </div>    
        <div>
            <select name="GENERO" value="{{$usuario->GENERO}}" disabled>
                <option value="M">M</option>
                <option value="F">F</option>
            </select>
        </div> 
        <div>
            <input type="number" placeholder="Cedula de Indentidad" name="CI" value="{{$usuario->CI}}" disabled>
        </div>    
        
        <div>
            <input type="email" placeholder="example@gmail.com" name="EMAIL" value="{{$usuario->EMAIL}}" disabled>
        </div>    
        <div>
            <input type="numer" placeholder="telefono" name="TELEFONO" value="{{$usuario->TELEFONO}}" disabled>
        </div>    
        <div>
            <input type="text" placeholder="direccion" name="DIRECCION" value="{{$usuario->DIRECCION}}" disabled>
        </div>    
        <div>
            <input type="date" name="FECHA_ING" value="{{$usuario->FECHA_ING}}" disabled>
        </div>    
        <div>
            <input type="text" placeholder="area" name="AREA" value="{{$usuario->AREA}}" disabled>
        </div>        
        <div>
            <select name="id_horario" value="{{$usuario->id_horario}}">
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