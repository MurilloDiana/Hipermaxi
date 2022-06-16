<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;

class HorarioController extends Controller
{
    public function listarHorarios(){    
        $horarios = Horario::all();        
        return view ('horario', compact('horarios'));
    }
}
