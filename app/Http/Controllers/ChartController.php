<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empleado;
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

        return view('bar-chart', compact('datas'));
    }
}
