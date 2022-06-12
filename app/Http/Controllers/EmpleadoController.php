<?php

namespace App\Http\Controllers;

use App\Models\empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EmpleadoController extends Controller
{
    public function listarEmpleados(){    
        $datos = empleado::all()->sortBy("NOMBRE");        
        return view ('empleado', compact('datos'));
    }

    public function registrarEmpleado(Request $request){
        $datos=( 
            [
                'CODIGO'=>$request->CODIGO,
                'NOMBRE'=>$request->NOMBRE,
                'FECHA_NAC'=>$request->FECHA_NAC,
                'GENERO'=>$request->GENERO,
                'CI'=>$request->CI,
                'EMAIL'=>$request->EMAIL,
                'TELEFONO'=>$request->TELEFONO,
                'DIRECCION'=>$request->DIRECCION,
                'FECHA_ING'=>$request->FECHA_ING,
                'AREA'=>$request->AREA,
                'ANTIGUEDAD'=>$request->ANTIGUEDAD,
                'USUARIO'=>$request->USUARIO,
                'PASSWORD'=>Hash::make($request->PASSWORD),
                'NIVEL'=>$request->NIVEL
            ]
            );

        empleado::create($datos);
        return $this->listarEmpleados();
    } 

    
    public function edit($CODIGO){        
        $usuario = empleado::find($CODIGO);                
        return view('modificar_empleado', compact('usuario'));
    }

    public function update(Request $request, $CODIGO){
        $dato = empleado::find($CODIGO);         
        $dato->NOMBRE = $request->input('NOMBRE');
        $dato->GENERO = $request->input('GENERO');
        $dato->CI = $request->input('CI');
        $dato->EMAIL = $request->input('EMAIL');
        $dato->TELEFONO = $request->input('TELEFONO');
        $dato->DIRECCION = $request->input('DIRECCION');
        $dato->FECHA_ING = $request->input('FECHA_ING');
        $dato->AREA = $request->input('AREA');        
        $dato->NIVEL = $request->input('NIVEL');        
        $dato->update();                
        return $this->listarEmpleados();
    }

    public function eliminar($CODIGO){        
        $existe = empleado::find($CODIGO);        
        if($existe != null){
            $existe->delete();
        }
        return $this->listarEmpleados();        
    }
}
