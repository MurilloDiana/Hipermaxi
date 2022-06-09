<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\EmpleadoRequest;
use DB;
use App\Models\Empleado;
use Illuminate\Support\Facades\Hash;

class EmpleadoController extends Controller
{
    public function create(){
        return view('auth.empleado');
    }
    public function vac(){
        $datos = empleado::all();
        return view('auth.vacaciones',compact('datos'));
    }
    public function asignar (Request $request){
        return $request;
    }
    public function RegistrarEmpleado(EmpleadoRequest $request){
        //dd($request);verifica si los datos son correctos antes de una conexion
        
        $reg=new Empleado;
        $reg->CODIGO=$request->get('CODIGO');//$reg->CODIGO=$request('CODIGO') GUARDA LOS DATOS EN $reg del campo CODIGO de la base de datos y 'CODIGO'del formulario
        $reg->NOMBRE=$request->get('NOMBRE');
        $reg->FECHA_NAC=$request->get('FECHA_NAC');
        $reg->GENERO=$request->get('GENERO');
        $reg->CI=$request->get('CI');
        $reg->EMAIL=$request->get('EMAIL');
        $reg->TELEFONO=$request->get('TELEFONO');
        $reg->DIRECCION=$request->get('DIRECCION');
        $reg->FECHA_ING=$request->get('FECHA_ING');
        $reg->AREA=$request->get('AREA');
        $reg->USUARIO=$request->get('USUARIO');
        $reg->CONTRASEÑA=Hash::make($request->get('CONTRASEÑA'));
        $reg->NIVEL=$request->get('NIVEL');
        $reg->save();
    }
}
