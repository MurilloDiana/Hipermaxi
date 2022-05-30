<?php

namespace App\Http\Controllers;

use App\Models\empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Post;

class EmpleadoController extends Controller
{
    public function listarEmpleados(){    
        $datos = empleado::get();
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empleado $empleado)
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
