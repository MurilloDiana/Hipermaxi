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

    public function store(Request $request)
    {
        $empleados = new empleado();
        $falta = new falta();
        $memo = new memorandum();
        $memo->fecha=$request->fecha;
        $memo->descripcion=$request->desc;
        $memo->id_emp=$request->id_empleado;
        $v1=falta::join('faltas.id_usuario',$request->id_empleado)->select('faltas.id');
        $memo->id_falta=$v1;
        $memo->get();

    }

}
