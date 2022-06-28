<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Hipermaxi</title>
  
  <!-- Bootstrap core CSS -->
  <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">  
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>
<body>
  @include('layouts.partials.navbar')
  <main class="container-fluid">
      @yield('content')
  </main>
  <!--@extends('layouts.footer-master')-->
  <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>  
</body>
</html>