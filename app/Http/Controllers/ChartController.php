<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empleado;
use App\Models\Falta;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function index()
    {
    	$users = Empleado::select(DB::raw("COUNT(*) as count"))
    			->whereYear('FECHA_ING', date('Y'))
    			->groupBy(DB::raw("Month(FECHA_ING)"))
    			->pluck('count');
                

    	$months = Empleado::select(DB::raw("Month(FECHA_ING) as month"))
    			->whereYear('FECHA_ING', date('Y'))
    			->groupBy(DB::raw("Month(FECHA_ING)"))
    			->pluck('month');

    	$datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
    	foreach($months as $index => $month) 
    	{
    		$datas[$month-1] = $users[$index];
    	}

    	return view('chart', compact('datas'));
    }

    public function barChart()
    {
        $users = Falta::select(DB::raw("COUNT(*) as count"))
                ->whereYear('dia_faltado', date('Y'))
                ->groupBy(DB::raw("Day(dia_faltado)"))
                ->pluck('count');

        $days = Falta::select(DB::raw("Day(dia_faltado) as day"))
                ->whereYear('dia_faltado', date('Y'))
                ->groupBy(DB::raw("Day(dia_faltado)"))
                ->pluck('day');

        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

        foreach($days as $barChart => $days) 
        {
            $datas[$days-1] = $users[$barChart];
        }

        return view('bar-chart', compact('datas'));
    }

    public function circular(){
        $users=Empleado::all();
        $data=[];

        foreach($users as $user){
            $data[]=['name'=>$user['NOMBRE'], 'y'=>$user['ANTIGUEDAD']];
        }
        return view('circular',compact('data'));
    }
}
