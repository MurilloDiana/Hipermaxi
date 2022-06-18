<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\empleado;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*session(['idSession' => '1']);
        $boolean = session()->has('idSession');//comprobarque
        dd($boolean);*/        
        if(isset($request)){
            $usuario = $request->input('USUARIO');            
            $password = $request->input('PASSWORD');                   
            //$res=DB::table('empleados')->where('USUARIO', $usuario)->first();//$res = mysqli_query($cser,"select* from users where uname='$a'and upassword='$b'");            
            //$hashedPassword=DB::table('empleados')->select('PASSWORD')->where('CODIGO', $usuario)->get();
            $datos = empleado::find($request->CODIGO);
            if($datos and (Hash::check($password, $datos->PASSWORD) and ($datos->CODIGO == $request->CODIGO))){
                session(['idSession' => $usuario]);
                $request->session()->regenerate();
                return redirect('/')->with('message', $usuario); 
            }else{                
                return view('login');
            }
        }    
        /* bibliografia
        ----para hash::check
            https://hotexamples.com/es/examples/illuminate.support.facades/Hash/check/php-hash-check-method-examples.html
        ----para session
            https://desarrolloweb.com/articulos/session-laravel.html
        */       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {        
        session()->forget('idSession');        
        return view('login');
    }
}
