@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins',sans-serif;
    }
    body{
        height: 100vh;
        padding: 10px;

    }
    .container{
        max-width: 700px;
        width: 100%;
        background: #fff;
        padding: 25px 30px;
        border-radius: 5px;
    }
    .container .title{
        font-size: 25px;
        font-weight: 500;
        position: relative;
    }
    .container .title::before{
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 30px;
    }
    .container form .user-details{
     
        justify-content: space-between;
        margin: 20px 0 12px 0;
    }
    form .user-details .input-box{
        margin-bottom: 15px;
        width: calc(100% / 2 - 20px);
    }
    .user-details .input-box .details{
        display: block;
        font-weight: 500;
        margin-bottom: 5px;
    }
    .user-details .input-box input{
       height: 45px;
       width: 100%;
       outline: none;
       border-radius: 5px;
       border: 1px solid #ccc;
       padding-left: 15px;
       font-size: 16px;
       border-bottom-width: 2px;
       transition: all 0.3s ease;
    }
    .user-details .input-box input:focus,
    .user-details .input-box input:valid{
        border-color:#1ABC9C;
    }
    form .button{
        height: 45px;
        margin: 45px 0;
    }
    form .button input{
        height: 100%;
        width: 100%;
        outline: none;
        color: #fff;
        border: none;
        font-size: 18px;
        font-weight: 500;
        border-radius: 5px;
        letter-spacing: 1px;
        background: #1ABC9C;
    }
    form .button input:hover{
        background-attachment: #777c7b;
    }
    .btn-warning{
    position: relative;
    padding: 11px 16px;
     font-size: 15px;
     line-height: 1.5;
     border-radius: 3px;
     color: #fff;
     background-color: #ffc100;
     border: 0;
     overflow: hidden;
     transition: 0.2s;
    }
    .btn-warning input[type="file"]{
        cursor: pointer;
        position: absolute;
        left: 0%;
        top: 0%;
        transform: scale(5);
        opacity: 0;
    }
    .btn-warning:hover{
        background: #d9a400;
    }
</style>
<div class="container">
    <div class="title">Faltas Justificadas</div>
    <form action="{{ route('ingresar') }}" method="POST" class="form-horizontal" role="form">
        {{ csrf_field() }} 
        @method('POST')
      <div class="user-details">
         <div class="input-box">
           <span class="details">Nombre Completo</span>
           <input type="text" placeholder="Ingrese el nombre" required>
         </div>
         <div class="input-box">
            <span class="details">Codigo</span>
            <input type="text" placeholder="Ingrese el codigo" required>
          </div>
          <div class="input-box">
            <span class="details">Fecha</span>
            <input type="date" name="" id="" required>
          </div>
          <div class="input-box">
            <span class="details">Motivo de la Falta</span>
            <textarea name="" id="" cols="40" rows="10" placeholder="Descripcion de la falta"></textarea>    
          </div>
          <div class="input-box">
            <span class="details">Comprobante</span>
            <button type="button" class="btn-warning">
            <i class="fa fa-upload"></i> Subir Comprobante
            <input type="file" required>
            </button>
          </div>
      </div>
      <div class="button">
         <input type="submit" value="Registrar Falta">
      </div>
    </form>
   </div>
@endsection
