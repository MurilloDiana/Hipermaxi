<?php

namespace App\Http\Controllers;

use App\Models\faltajustificada;
use App\Models\empleado;
use Illuminate\Http\Request;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FaltaJustifiController extends Controller
{
    public function index(){
        return view ('falta');
    }
    public function index2(){
        return view ('faltajustificada');
    }
    public function store(Request $request ){
        dd($request);
    }
}
