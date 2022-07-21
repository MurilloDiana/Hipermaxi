<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empleado;
use App\Models\falta;
use App\Models\memorandum;

class memorandumController extends Controller
{
    public function index()
    {
        //
        $empleados = empleado::all();
        return view('pruebamemo',compact('empleados'));
    }

}
