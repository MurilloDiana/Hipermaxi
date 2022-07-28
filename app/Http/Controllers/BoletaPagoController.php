<?php

namespace App\Http\Controllers;

use App\Models\boletaPago;
use Illuminate\Http\Request;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Controllers\Str;
use App\Models\empleado;
use App\Models\descuento;
use App\Models\pagoAdicional;
use App\Models\sueldo;

class BoletaPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $empleados = empleado::all();
        return view('pruebapago',compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleados = new empleado();
        $adicional = new pagoAdicional();
        $descuento = new descuento();
        $sueldo = new sueldo();
        $pago = new boletaPago();
        $pago->fecha_emision = $request->fecha;
        $pago->fecha_recibido = Carbon::now();
        $pago->dias_trabajados = $request->dias;
        $pago->id_emp = $request->id_empleado;
        $aux1=pagoAdicional::where("pagoAdicionals.id_pa_emp","=",$request->id_empleado)->get()->first();
        $pago->id_pagoadicional=$aux1->id_pago;
        $auxi2=descuento::where("descuentos.id_emp_desc","=",$request->id_empleado)->get()->first();
        $pago->id_descuent=$auxi2->id_descuento;
        $v1 = 0.00;
        if(
        pagoAdicional::select('BonoTotal')->where("pagoAdicionals.id_pa_emp","=",$request->id_empleado)->get()->first()
        !=null){
            $v1 = pagoAdicional::where("pagoAdicionals.id_pa_emp","=",$request->id_empleado)->get()->first();
            $v1=$v1->BonoTotal;
        }
        /**$v1=$v1->BonoTotal;*/
        $pago->monto_pagoAdic = $v1;
        $v2=0;
        if(
        descuento::select('Total_descuento')->where("descuentos.id_emp_desc","=",$request->id_empleado)->get()->first()
        !=null){
            $v2 = descuento::where("descuentos.id_emp_desc","=",$request->id_empleado)->get()->first();
            $v2=$v2->Total_descuento;
        }
        $pago->monto_desc = $v2;
        $v3 = sueldo::where("id_ingreso_emp","=",$request->id_empleado)->get()->first();
        $v3 = $v3->Sueldo*1;
        $v4 = $v3+$v1-$v2;
        $pago->monto_total = $v4;
       //dd($v3);
        $pago->save();
        return redirect(route('generapago'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\boletaPago  $boletaPago
     * @return \Illuminate\Http\Response
     */
    public function show(request $request)
    {
        $pagoadicional=pagoAdicional::where("pagoAdicionals.id_pa_emp","=",$request->CODIGO)->first();
        $descuento=descuento::where("descuentos.id_emp_desc","=",$request->CODIGO)->first();
        $empleado=empleado::find($request->CODIGO);
        $sueldo=sueldo::where("id_ingreso_emp",'=',$request->CODIGO)->first();
        $boleta=boletaPago::where("id_emp",'=',$request->CODIGO)->first();
        return view('npruebapago', compact('boleta','empleado','pagoadicional','sueldo','descuento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\boletaPago  $boletaPago
     * @return \Illuminate\Http\Response
     */
    /**  public function edit(boletaPago $boletaPago)
   * {
    *    //
    *}*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\boletaPago  $boletaPago
     * @return \Illuminate\Http\Response
     */
  /**  public function update(Request $request, boletaPago $boletaPago)
   * {
    *    //
    *}*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\boletaPago  $boletaPago
     * @return \Illuminate\Http\Response
     */
    public function destroy(boletaPago $boletaPago)
    {
        //
    }
}
