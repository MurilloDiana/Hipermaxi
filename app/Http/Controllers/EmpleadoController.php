<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function create(){
        return view('auth.empleado');
    }
}
