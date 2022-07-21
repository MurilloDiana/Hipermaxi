<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empleado;
use App\Models\falta;
use App\Models\memorandum;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Controllers\Str;

class memorandumController extends Controller
{
    public function index()
    {
        //
        $empleados = empleado::all();
        return view('pruebamemo',compact('empleados'));
    }

    public function store(Request $request)
    {
        $empleados = new empleado();
        $falta = new falta();
        $memo = new memorandum();
        $memo->fecha=$request->fecha;
        $memo->descripcion=$request->desc;
        $memo->id_emp=$request->id_empleado;
        $v1=falta::where("id_empleado",$request->id_empleado)->first();
        $memo->id_falta=$v1->id;
        //dd($v1->id);
        $memo->save();
        return redirect(route('memorandum'));
    }
    public function show(request $request)
    {
        $empleado=empleado::find($request->CODIGO);
        $falta=falta::where("id_empleado",'=',$request->CODIGO)->first();
        $memo=memorandum::where("id_emp",'=',$request->CODIGO)->first();
        return view('npruebamemo', compact('empleado','falta','memo'));
    }

}
