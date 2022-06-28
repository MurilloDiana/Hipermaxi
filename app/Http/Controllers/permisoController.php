<?php

namespace App\Http\Controllers;

use App\Models\permiso;
use App\Models\empleado;
USE App\Models\fkpide;
use Illuminate\Http\Request;

class permisoController extends Controller
{

    public function listar(){
        $pes['pess'] = permiso::select('empleados.NOMBRE','empleados.area','permisos.asunto','permisos.fecha_ini','permisos.fecha_fin','permisos.DIAS')
        ->join('empleados','permisos.id_permiso_emp','=','empleados.codigo')
        ->get();
        //return $pe;
        return view('permiso',$pes);
    }
    public function store (request $registra){
        return view('Genpermiso',array());
        $datos=request()->all();
        return response()->json($datos);
    }
}
