<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empleado;
use Carbon\Carbon;

class AntiguedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = empleado::all()->sortBy("NOMBRE");
        return view ('antiguedad', compact('datos'));
    }

    public function antiguedad_index(){
        $year = 3;
        $date = Carbon::now(); //2015-01-01 00:00:00
        $endDate = $date->subYear($year);  //2016-01-01 00:00:00                
        $datos = empleado::whereYear('FECHA_ING',$endDate)->get();        
         return view('antiguedad', compact('datos'));
    }
}
