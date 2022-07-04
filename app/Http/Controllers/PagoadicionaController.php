<?php

namespace App\Http\Controllers;
use App\Models\empleado;
use App\Models\pagoAdicional;
use App\Models\sueldo;
use Illuminate\Http\Request;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Controllers\Str;


class PagoadicionaController extends Controller
{
    public function listar(){
        $cuenta['pess']=pagoAdicional::select('pagoAdicionals.id_pago','pagoAdicionals.tiempo_extra','pagoAdicionals.totalHorasExtras','pagoAdicionals.fecha_feriados',
        'pagoAdicionals.totalFeriado','pagoAdicionals.BonoAntiguedad','pagoAdicionals.BonoTotal')
        ->get();
        
        return view('pagoadicional',$cuenta);
    }

    public function registro(){
        $empleados = empleado::all();
        return view('registrarPagoAdiciona',compact('empleados'));
    }

    public function registro1(Request $request){
        $empleados = new empleado;
        $sueldo = new sueldo();
        $bono = new pagoAdicional;
        //------------------------------------------------
        //$v2 = DB::table('sueldos')->select('Sueldo')->where('id_ingreso_emp',$sueldo)->get();
        //------------------------------------------------
        //$v2=DB:: table('sueldos')->select('sueldos.Sueldo')->where('id_ingreso_emp',$request->input('id_empleado'))->get()->first();
        //$v3 = $v2/30.00;
        $v2 =sueldo::where("id_ingreso_emp","=",$request->id_empleado)->get()->first();
        $v22 =sueldo::where("id_ingreso_emp","=",$request->id_empleado)->get()->first();
        $vid =sueldo::where("id_ingreso_emp","=",$request->id_empleado)->get()->first();
        $v222=empleado::where("CODIGO","=",$request->id_empleado)->get()->first();
        $v2id=empleado::where("CODIGO","=",$request->id_empleado)->get()->first();
        //dd($v2->Sueldo);
        $v2=((($v2->Sueldo/30.00)/8)*2);  
        //$v3= $request->TIEMPO_EXTRA/60;
        //$v3=explode(":",time($request->TIEMPO_EXTRA));
        $v3=($request->TIEMPO_EXTRA);
        $time = explode(':', $v3);
        $time1 = date("i",strtotime($v3))/60;//convertir minutos a hr a un numero conmprendible para multiplicar
        $time2 = date("H",strtotime($v3));
        $time3 = $time1+$time2;
        $timestamp = date("H.i",strtotime($v3));//dato para guardar 
        $timestamp2 = $v2*$time3;// esto es lo q gano por mi tiempo extra
        //$vs= strlen(substr($request->FERIADOS,0,-6));
        if($request->FERIADOS!=NULL){
            $FECHA= date("Y-m-d",strtotime($request->FERIADOS));
            $v22 =($v22->Sueldo/30)*2;
        }else{
            $FECHA = $request->FERIADOS;
            $v22 =($v22->Sueldo/30)*0;
        }
       // $v2= $v2* $timestamp; ///valor de horas extras calcularas por minutos
       $v222=$v222->FECHA_ING;
       $date=Carbon::createFromDate($v222)->age;
       $v33=2100;
       switch($date){
           case($date<=2):
            $v33=$v33*3*0;
            break;
           case(($date>2) and ($date <5)):
            $v33=$v33*3*0.05;
            break;
           case($date>=5  &&  $date <8):
            $v33=$v33*3*0.11;
            break;
           case(($date>8 ) && ( $date <=11)):
            $v33=$v33*3*0.18;
            break;
           case(($date>11 ) && ( $date <=15)):
            $v33=$v33*3*0.26;
            break;
           case(($date>15 ) && ( $date <=20)):
            $v33=$v33*3*0.34;
            break;
           case(($date>20 ) && ( $date <=25)):
            $v33=$v33*3*0.42;
            break;
           case($date>25):
            $v33=$v33*3*0.50;
            break;
       }
     //,$time,$timestamp);
     $total= $timestamp2+$v22+$v33;
        $bono->tiempo_extra=$v3;
        $bono->totalHorasExtras= $timestamp2;
        $bono->fecha_feriados=$FECHA;
        $bono->totalFeriado=$v22;
        $bono->BonoAntiguedad=$v33;
       $bono->BonoTotal=$total;
        $bono->id_ig=$vid->id_ingreso;
        $bono->id_pa_emp=$v2id->CODIGO;
        //dd($v2,$timestamp,$timestamp2,$FECHA,$v22,$v222,$date,$v33,$total);
        $bono->save();
        return redirect(route('pagoadicional.index'));
        //$bono->tiempo_extra=$v1->input('TIEMPO_EXTRA');
        //return view();
    }
}
