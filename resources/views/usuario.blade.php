@extends('layouts.master')
@section('title', 'usuario')
@section('content')
    <div >
        <h2>Gestion de Trabajadores Activos</h2>

            <div class="field" id="searchform">
                <input type="text" id="searchterm" placeholder="Nombre de Trabajador" />
                <button type="button" id="search">Buscar</button>
              </div>
              <div class="container">
                <table border="1px"class="table table-striped table-hover col-sm-4">
                 <thead class="thead-green">
           
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Area</th>
                <th scope="col">Turno</th>
              </tr>
            
              <tr>
                <td>001</td>
                <td>Diana Murillo</td>
                <td>ADM</td>
                <td>Mañana</td>
              </tr>
            
              <tr>
                <td>002</td>
                <td>Nelson Galvan</td>
                <td>Cajero</td>
                <td>Tarde</td>
              </tr>
            
              <tr>
                <td>003</td>
                <td>Mauricio Choque</td>
                <td>Jefe de Caja</td>
                <td>Mañana</td>
              </tr>
            
              <tr>
                <td >004</th>
                <td>Jorge Cari</td>
                <td>Cajero</td>
                <td>Tarde</td>
              </tr>

                  <tr>
                    <td >005</th>
                    <td>Rene Burgoa</td>
                    <td>Atencion al Cliente</td>
                    <td>Mañana</td>
                  </tr>               
             </table>
           </div> 
    </div>
@endsection