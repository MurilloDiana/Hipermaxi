<?php

namespace App\Http\Controllers;
use App\Models\boletaPago;
use Illuminate\Http\Request;
use PDF;
class GeneradorController extends Controller
{
    public function index(){
        $boletas = boletaPago::all();
        return view('index', compact('boletas'));
    }
    public function createPDF(){
        //Recuperar todos los productos de la db
        $boletas = boletaPago::all();
        view()->share('boletas', $boletas);
        $pdf = PDF::loadView('index', $boletas);
        return $pdf->download('archivo-pdf.pdf');
    }
}
