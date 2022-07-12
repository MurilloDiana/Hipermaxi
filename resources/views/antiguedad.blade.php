@extends('layouts.app')
@section('content')
<body>
  <div class="py-4">
    <div class="col-xl-12">
      <form action="{{route('antiguedad.index')}}" method="get"> 
        <div class="form-row">
          <div class="col-sm-4 my-1">
            <input type="text" class="form-control-white" name="texto">
          </div>
          <div class="col-auto my-1">
            <input type="submit" class="btn btn-primary" value="Buscar">
          </div>
        </div>
      </form>
    </div> 
  <table class="table table-hover bg-light">
    <thead class="bg-primary text-light">
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Fecha de Ingreso</th>        
      
      </tr>
    </thead>
    <tbody>
      @if (count($datos)<=0)
        <tr>
          <td colspan="2">No hay resultados</td>
        </tr>
        @else
        @foreach ($datos as $dato)
        <tr>
          <td>{{$dato->NOMBRE}}</td>

          <td>{{$dato->FECHA_ING}}</td>          

      </tr>
        @endforeach
        @endif
  </table>
  </div>
</body>
</html>
@endsection