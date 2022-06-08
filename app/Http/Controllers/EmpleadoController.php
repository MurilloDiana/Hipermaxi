<?php

namespace App\Http\Controllers;

use App\Models\empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Nullable;

class EmpleadoController extends Controller
{
    public function listarEmpleados(){    
        $datos = empleado::all();
        //dd($datos);
        return view ('empleado', compact('datos'));
    }

    /*public function mostrarLista(){    
       // $datos = empleado::where('NOMBRE','nelson')->get();
        //->frist muestra solo el primero
        //$prueba = $datos[0]->nombre //muestra datos de la columna 0
        //dd($datos);
        return view('empleado');
    }*/

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
        $datos = empleado::get();
        //dd($datos); 
        return view('empleado', compact('datos'));
    }


    public function eliminar(Request $request){
        /*if ($post != null) {
            $post->delete();
            return redirect()->route('dashboard')->with(['message'=> 'Successfully deleted!!']);
        }*/
        $existe = empleado::find($request->CODIGO);
        if($existe != null){
            $existe->delete();
        }
        $datos = empleado::get();
        return view('empleado', compact('datos'));
    }


    /**
     * devuelve los datos para ser actualizado
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($CODIGO){
        
        $usuario = empleado::find($CODIGO);        
        //$usuario = empleado::where('CODIGO', $request->CODIGO)->first();
        //dd($usuario);
        return view('modificar_empleado', compact('usuario'));
    }

  /**
     * modifica cuando le das click en actualizar
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(empleado $empleado)
    {
        //
    }
}
