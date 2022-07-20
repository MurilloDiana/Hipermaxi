@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>MARCAR ASISTENCIA</h1>
        <form action="{{route('registrarjornada')}}" method="POST">
            @csrf
            <div>
                <input type="number" placeholder="Codigo Trabajador" name="id_user" requered/>
            </div>
            <div>
                <button type="submit" class="btn btn-success">Marcar</button>
            </div>
        </form>
    </div>
@endsection