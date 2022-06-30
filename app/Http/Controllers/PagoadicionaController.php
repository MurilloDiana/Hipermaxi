<?php

namespace App\Http\Controllers;
use App\Models\empleado;
use App\Models\pagoAdicional;
use App\Models\sueldo;
use Illuminate\Http\Request;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PagoadicionaController extends Controller
{
    public function listar(){
        return view('pagoadicional',array());
    }

    public function registro(){
        $empleados = empleado::all();
        return view('registrarPagoAdiciona',compact('empleados'));
    }

    public function registro1(request $v1){
        $empleados = new empleado;
        $sueldo = new sueldo;
        $bono = new pagoAdicional;
        //------------------------------------------------
        $sueldo->id_ingreso_emp=$v1->input('id_empleado');
        $pes = sueldo::select('sueldo.Sueldo')
        ->where('sueldo',$sueldo,'=','sueldo.id_ingreso_emp')
        ->get();
        //------------------------------------------------


        return view();
    }
}
