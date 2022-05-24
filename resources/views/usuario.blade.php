@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
    <div >
        <h2>Gestion de Trabajadores Activos</h2>
            <div class="field" id="searchform">
                <input type="text" id="searchterm" placeholder="Nombre de Trabajador" />
                <button type="button" id="search">Buscar</button>
            </div>
            
              <label><strong>Cantidad actual de Trabajadores Activos: </strong> 5</label>
            
            <div class="container">
              <table border="1px" class="table  table-hover">
             
                  <tr style="background:#b66100">
                    <th  style="width:100px" >ID</th>
                    <th  style="width:300px">Nombre</th>
                    <th  style="width:250px">Area</th>
                    <th style="width:150px">Turno</th>
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