@extends('layouts.app')
@extends('layouts.partials.navbar_administracion')
@section('content')

<div class="box">
    <div class="container-1">     
          <form action="{{route('buscar_index')}}" method="GET">
              @csrf                    
              <input type="search" placeholder="Cuscar Codigo" name="id_user" requered/>
              <button type="submit" class="btn btn-success">Buscar</button>            
          </form>     
    </div>
</div>

<div class="py-4">
    <table class="table table-hover bg-light text-center">
        <thead class="bg-primary text-light">
            <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Usuario</th>                        
            <th scope="col">Hora Marcada</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($datos as $dato)
        <tr>
            <td>{{$dato->id}}</td>
            <td>{{$dato->name}}</td>            
            <td>{{$dato->datetime_marcado}}</td>            
        </tr>
        @endforeach
    </table>
</div>
@endsection