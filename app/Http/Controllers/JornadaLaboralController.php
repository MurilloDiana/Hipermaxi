<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JornadaLaboral;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JornadaLaboralController extends Controller
{
    public function marcarAsistencia(){
        return view('jornadaLaboral');
    }

    public function listarAsistencia(){                  
        $datos = DB::table('jornada_laborals')
        ->join('users', 'jornada_laborals.id_user', '=', 'users.id')
        ->select('users.name','users.id', 'jornada_laborals.datetime_marcado')        
        ->get();          
        return view ('listaJornada', compact('datos'));
    }
    
    public function buscarAsistencia(Request $request){        
            $datos = DB::table('jornada_laborals')
            ->join('users', 'jornada_laborals.id_user', '=', 'users.id')
            ->select('users.name','users.id', 'jornada_laborals.datetime_marcado')
            ->where('jornada_laborals.id_user', '=', $request->id_user)
            ->get();  
            //SELECT CODIGO, NOMBRE, turno FROM empleados, horarios where id=id_horario
            return view ('listaJornada', compact('datos'));        
    }

    public function marcarJornada(Request $request){            
        $tomorrow = Carbon::now();
        $datos=([
            'id_user'=>$request->id_user,
            'datetime_marcado'=>$tomorrow
        ]);        
        JornadaLaboral::create($datos);
        return redirect()->route('marcar_asistencia');
    }
}
