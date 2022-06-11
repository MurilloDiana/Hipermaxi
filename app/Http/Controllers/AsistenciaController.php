<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\asistencia;
use App\Models\empleado;
use App\Models\retraso;

class AsistenciaController extends Controller
{
    public function listar()
    {
        $NombreEmpleados= DB::table('empleados')
        ->join('trabajas','empleados.CODIGO','=','trabajas.ID_EMP')
        ->join('jornada_laborals','trabajas.id_jornada','=','jornada_laborals.id')
        ->join('registras','jornada_laborals.id','=','registras.id_jornada')
        ->join('asistencias','REGISTRAS.id_asistencia','=','asistencias.id')
        ->join('registro_rts','asistencias.id','=','registro_rts.id_asistencia')
        ->join('retrasos','registro_rts.id_retraso','=','retrasos.id')
        ->select('empleados.CODIGO','empleados.NOMBRE','empleados.NIVEL','retrasos.fecha','retrasos.tiempo','asistencias.total_dias')
        ->get();
        return view('asistencia',array('empleado'=> $NombreEmpleados));
    }
}
