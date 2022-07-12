<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Falta;

class FaltaController extends Controller
{
    public function listarFaltas(){
        //$datos = Falta::all();
        $datos = Falta::paginate(15);        
        return view ('faltas', compact('datos'));
    }

    public function registrarFaltas(Request $request){        
        $datos = new Falta;
        $datos->create($request->all());
        return redirect()->route('faltas');
    } 
}
