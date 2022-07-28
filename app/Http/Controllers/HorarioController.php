<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;
use App\Models\empleado;
use Illuminate\Support\Facades\DB;

class HorarioController extends Controller
{
    public function listarHorarios(){    
        $horarios = Horario::all();
        $empleados = DB::table('empleados')
        ->join('horarios', 'empleados.id_horario', '=', 'horarios.id')        
        ->select('empleados.CODIGO','empleados.NOMBRE','empleados.GENERO','empleados.AREA', 'horarios.turno')
        ->get();  
        //SELECT CODIGO, NOMBRE, turno FROM empleados, horarios where id=id_horario
        return view ('horario', compact('horarios', 'empleados'));
    }

    public function nuevoHorario(Request $request){
        $newHorario=( 
            [
                'id'=>$request->id,
                'hora_ingreso'=>$request->hora_ingreso,
                'hora_salida'=>$request->hora_salida,
                'turno'=>$request->turno
            ]
            );
        Horario::create($newHorario);
    }

    public function asignarHorarios(Request $request){              
            $empleado = empleado::find($request->CODIGO); 
            return view('modificar_horario', compact('empleado'));        
    }

    public function update(Request $request, $CODIGO){
        
        $dato = empleado::find($CODIGO);  
        $dato->id_horario = $request->input('id_horario');
        $dato->update();
        return redirect()->route('horario.index');
    }
}
