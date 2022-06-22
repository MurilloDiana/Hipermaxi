<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class permisoController extends Controller
{

    public function listar(){
        return view('permiso',array());
    }
    public function index(){
        return view('Genpermiso',array());
    }
}
