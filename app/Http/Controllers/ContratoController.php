<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrato;
use App\Models\empleado;
use Illuminate\Support\Facades\DB;

class ContratoController extends Controller
{
    public function listarContratos(){            
        $datos = DB::table('empleados')
        ->join('contratos', 'empleados.CODIGO', '=', 'contratos.id')        
        ->select('empleados.CODIGO', 'empleados.NOMBRE','empleados.FECHA_NAC','empleados.CI','empleados.GENERO', 'empleados.DIRECCION', 'empleados.AREA', 'contratos.inicio_contrato', 'contratos.final_contrato')
        ->get();  
        //SELECT CODIGO, NOMBRE, turno FROM empleados, horarios where id=id_horario
        return view ('contrato', compact('datos'));
    }

    public function asignarContrato(Request $request){        
        $contrato = empleado::find($request->CODIGO); 
        return view('modificar_contrato', compact('contrato'));
    }


    public function registrarContrato(Request $request){           
        $datos=( 
            [
                'id'=>$request->CODIGO,
                'inicio_contrato'=>$request->inicio_contrato,
                'final_contrato'=>$request->final_contrato
            ]
            );
        Contrato::create($datos);
        return redirect()->route('contrato.index');
    } 

    public function eliminarContrato($CODIGO){        
        $existe = Contrato::find($CODIGO);                
        if($existe != null){
            $existe->delete();
        }
        return redirect()->route('contrato.index');
    }

}
