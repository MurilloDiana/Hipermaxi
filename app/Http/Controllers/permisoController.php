<?php

namespace App\Http\Controllers;

use App\Models\permiso;
use App\Models\empleado;
use Illuminate\Http\Request;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class permisoController extends Controller
{

    public function listar(){
        $pes['pess'] = permiso::select('empleados.NOMBRE','empleados.area','permisos.asunto','permisos.fecha_ini','permisos.fecha_fin','permisos.DIAS')
        ->join('empleados','permisos.id_permiso_emp','=','empleados.codigo')
        ->get();
        //return $pes;
       return view('permiso',$pes);
    }
    public function mostr (){
        $empleados = empleado::all();
        return view('Genpermiso',compact('empleados'));

        //return response()->json($datos);
    }
    public function store(request $variable){
        $fechaActual=date('Y-m-d');
        $this->validate($variable,[
            'fecha_ini'=>'required|after:'.$fechaActual,
            'fecha_fin'=>'required|after:'.$date1 = Carbon::parse($variable->input('fecha_ini'))
        ]);
        $primera= new permiso;
        $primera->FECHA_INI=$variable->input('fecha_ini');
        $primera->FECHA_FIN=$variable->input('fecha_fin');
        $primera->ASUNTO=$variable->input('motivo');
        $date1 = Carbon::parse($variable->input('fecha_ini'));
        $date2= Carbon::parse($variable->input('fecha_fin'));

        $dateR = $date2->diffInDays($date1);
        $primera->DIAS=$dateR;
        $primera->id_permiso_emp=$variable->input('id_empleado');
        $primera->save();
        return redirect(route('permiso.index'));
    }
}
