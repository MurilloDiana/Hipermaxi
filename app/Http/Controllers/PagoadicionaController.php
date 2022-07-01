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

    public function registro1(Request $request){
        $empleados = new empleado;
        $sueldo = new sueldo;
        $bono = new pagoAdicional;
        //------------------------------------------------
        //$v2 = DB::table('sueldos')->select('Sueldo')->where('id_ingreso_emp',$sueldo)->get();
        //------------------------------------------------
        //$v2=DB:: table('sueldos')->select('sueldos.Sueldo')->where('id_ingreso_emp',$request->input('id_empleado'))->get()->first();
        //$v3 = $v2/30.00;
        $v2 = sueldo::where("id_ingreso_emp","=",$request->id_empleado)->get()->first();
        //dd($v2->Sueldo);
        $v2=(($v2->Sueldo/30.00)/8.00);
        dd($v2);
        
        //$bono->tiempo_extra=$v1->input('TIEMPO_EXTRA');
        //return view();
    }
}
