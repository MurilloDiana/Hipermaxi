<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\empleado;
use App\Models\sueldo;
use App\Models\Falta;
use App\Models\descuento;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Controllers\Str;

class DescuentoController extends Controller
{
    public function index(){
        $cuenta['pess']=descuento::select('empleados.NOMBRE',
        'sueldos.Sueldo','descuentos.AFP',
        'descuentos.Total_falta',
        'descuentos.Total_retraso','descuentos.Total_descuento')
        ->join('empleados','descuentos.id_emp_desc','=','empleados.codigo')
        ->join('sueldos','descuentos.id_emp_desc','=','sueldos.id_ingreso_emp')
        ->get();
        return view ('vistaDescuento',$cuenta);
    }

    public function mostrar(){
        $empleados = empleado::all();
        return view('generardescuento',compact('empleados'));
    }
    public function store(request $request){
        $emp = new empleado(); $sueldo = new sueldo();
        $falta = new Falta(); $user = new User();
        //-----------------------------------------------
        $v1= empleado::where('empleados.CODIGO','=',$request->id_empleado)->get()->first();
        $v11= User::where('users.id','=',$request->id_empleado)->get()->first();
        $v2 = sueldo::where('sueldos.id_ingreso_emp','=',$request->id_empleado )->get()->first();
        $v22 = sueldo::where('sueldos.id_ingreso_emp','=',$request->id_empleado )->get()->first();
        $des = 0;

        switch($request->faltas){
            case(($request->faltas)==1):
                $des=72;
                break;
            case(($request->faltas)>=2 and ($request->faltas)<=3):
                $des=140;
                break;
            case(($request->faltas)>=4 ):
                $des = $v2->sueldo;
        }
        $v2=((($v2->Sueldo/30.00)/8)*2);  
        $v3=($request->tiempo_desc);
        $time = explode(':', $v3);
        $time1 = date("i",strtotime($v3))/60;//convertir minutos a hr a un numero conmprendible para multiplicar
        $time2 = date("H",strtotime($v3));
        $time3 = $time1+$time2; 
        $res=$v2*$time3;// timepo
        $v22=($v22->Sueldo)*0.05;//AFP
        $descuento=new descuento();
        $descuento->AFP=$v22;
        $descuento->Total_falta=$des;
        $descuento->Total_retraso = $res;
        $descuento->Total_descuento = $v22+$des+$res;
        $descuento->id_emp_desc = $v1->CODIGO;
        $descuento->save();
        return redirect(route('mostrar.index'));
        //dd($v1->NOMBRE,$v11->id, $des,$request->faltas,$res,$v22);
        

        //return view('generardescuento');
    }
}
