<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagoadicionaController extends Controller
{
    public function listar(){
        return view('pagoadicional',array());
    }

    public function registro(){
        return view('registrarPagoAdiciona',array());
    }
}
