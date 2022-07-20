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
        //$datos=empelado::all();  
        $datos = empleado::paginate(15);        
        return view ('empleado', compact('datos'));
    }

    public function registrarEmpleadoFormulario(){
        return view('registrarEmpleado');
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
                'AREA'=>$request->AREA                
            ]
            );

        empleado::create($datos);
        return redirect()->route('empleado.index');
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

        $dato->update();                
        return redirect()->route('empleado.index');

        $dato->ANTIGUEDAD = $request->input('ANTIGUEDAD');
        $dato->USUARIO = $request->input('USUARIO');
        $dato->PASSWORD = Hash::make( $request->input('PASSWORD'));
        $dato->NIVEL = $request->input('NIVEL');        
        $dato->update();
        
        $datos=empleado::get();
        return view ('empleado', compact('datos'));  
    }



    public function antiguedad_index(){
        //$datos=DB::table('empleados')->select('NOMBRE','ANTIGUEDAD')->WHERE('ANTIGUEDAD'!=Null)->get();
        $datos= DB::table('empleados')->orderBy('ANTIGUEDAD')->select('NOMBRE','FECHA_ING','ANTIGUEDAD')->where('ANTIGUEDAD', '<>', NULL)->get();
        //dd($datos);
         return view('antiguedad', compact('datos'));
    }
    //Bibliografia
    //https://www.oulub.com/es-ES/Laravel/queries

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    public function eliminar($CODIGO){        
        $existe = empleado::find($CODIGO);        
        if($existe != null){
            $existe->delete();
        }
        return redirect()->route('empleado.index');
    }

    public function buscarEmpleados(Request $request){
        $datos = $request->input('CODIGO');        
        $datos = empleado::where('CODIGO',$datos)->get();          
        return view('empleado', compact('datos'));
    }
}
