@extends('layouts.app')
@extends('layouts.partials.navbar_administracion')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    Tu eres un Usuario Administrador.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection