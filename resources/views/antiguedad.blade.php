@extends('layouts.master')
@section('title', 'usuario')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>antiguedad</title>
</head>
<body>
    <form action="/antiguedad">  
    <input type="text" name="search">
    <input type="submit" value="Buscar">
</form>
</body>
</html>
@endsection