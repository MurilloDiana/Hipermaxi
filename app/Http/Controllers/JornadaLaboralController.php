<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JornadaLaboral;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JornadaLaboralController extends Controller
{
    public function jornadaIndex(){        
        return view ('jornadaLaboral');        
    }

    public function listarAsistencia(Request $request){        
        if($request->id == null){                      
            $datos = DB::table('jornada_laborals')
            ->join('users', 'jornada_laborals.id', '=', 'users.id')
            ->select('users.name','users.id', 'jornada_laborals.datetime_marcado')
            ->get();  
            //SELECT CODIGO, NOMBRE, turno FROM empleados, horarios where id=id_horario
            return view ('listaJornada', compact('datos'));
        }else{            
            $datos = DB::table('jornada_laborals')
            ->join('users', 'jornada_laborals.id', '=', 'users.id')
            ->select('users.name','users.id', 'jornada_laborals.datetime_marcado')
            ->where('jornada_laborals.id', '=', $request->id)
            ->get();  
            //SELECT CODIGO, NOMBRE, turno FROM empleados, horarios where id=id_horario
            return view ('listaJornada', compact('datos'));
        }
    }

    public function marcarJornada(Request $request){
        $tomorrow = Carbon::now();
        $datos=([
            'id'=>$request->id,
            'datetime_marcado'=>$tomorrow
        ]);        
        JornadaLaboral::create($datos);
        return redirect()->route('marcarjornada');
    }
}
