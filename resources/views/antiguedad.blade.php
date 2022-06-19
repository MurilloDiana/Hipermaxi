
@extends('layouts.app-master')
@section('content')
<body>
  <div class="py-4">
  <table class="table table-hover bg-light">
    <thead class="bg-primary text-light">
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Fecha de Ingreso</th>        

      
      </tr>
    </thead>
    <tbody>
        @foreach ($datos as $dato)
        <tr>
          <td>{{$dato->NOMBRE}}</td>

          <td>{{$dato->FECHA_ING}}</td>          

      </tr>
        @endforeach
  </table>
  </div>
</body>
</html>
@endsection