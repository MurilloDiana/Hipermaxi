<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\AntiguedadController;
//use App\Http\Controllers\ChartController;
use App\Http\Controllers\permisoController;
use App\Http\Controllers\LoginController;
//use App\Http\Controllers\AsistenciaController;
use App\http\Controllers\JornadaLaboralController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\PagoadicionaController;
use App\Http\Controllers\ContratoController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/////VISTA FALTA JUSTIFICADA
Route::get('/faltajustificada', function () {
    return view('faltajustificada');
});
////
Route::get('/retiro', function () {
    return view('retiro');
});
Route::group(['namespace' => 'App\Http\Controllers'], function(){   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/circular', 'ChartController@index')->name('chart.index');
    Route::get('/falta', function () {
        return view('falta');
    });
});


    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');    
    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        
        Route::get('/saludo', function () {
            return 'Hello World';
        });

        Route::get('/empleado', [EmpleadoController::class, 'listarEmpleados'])->name('empleado.index');        

        Route:: get('/chart', [ChartController::class,'index'])->name('chart.index');        
        Route::get('/bar-chart', [ChartController::class,'barChart'])->name('bar-char.index');
        Route::get('/circular', [ChartController::class,'circular'])->name('circular.index');

        /*CRUD ANTIGUEDADES*/
        Route::get('/antiguedad', [AntiguedadController::class, 'antiguedad_index'])->name('antiguedad.index');
       


    });


Route::get('/', function () {
    return view('/home/index');
});

    
Route::get('/hola', function () {
    return "hola mundo";
});


Auth::routes();  
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/usuario', function () {
        return "usuario";
    });    
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');


    /*CRUD EMPLEADO*/
    Route::get('/admin/empleado', [EmpleadoController::class, 'listarEmpleados'])->name('empleado.index');
    Route::post('/admin/registrar', [EmpleadoController::class, 'registrarEmpleado'])->name("registrar");
    Route::get('/admin/editar_empleado/{CODIGO}', [EmpleadoController::class, 'edit']);//manda los datos a editar
    Route::put('/admin/actualizar_empleado/{CODIGO}', [EmpleadoController::class, 'update'])->name('actualizarEmpleado');//actualiza los datos*/
    Route::get('/admin/buscar', [EmpleadoController::class, 'buscarEmpleados'])->name("buscar");
    Route::delete('/admin/eliminar/{CODIGO}', [EmpleadoController::class, 'eliminar']);

    /*CRUD HORARIO*/
    Route::get('/admin/horario', [HorarioController::class, 'listarHorarios'])->name('horario.index');
    Route::get('/admin/asignar', [HorarioController::class, 'asignarHorarios'])->name("asignar");
    Route::put('/admin/actualizar_horario/{CODIGO}', [HorarioController::class, 'update'])->name('actualizarHorario');

    /*CRUD CONTRATO*/
    Route::get('/admin/contrato', [ContratoController::class, 'listarContratos'])->name('contrato.index');
    Route::get('/admin/asignarContrato', [ContratoController::class, 'asignarContrato'])->name('asignarContrato');
    Route::post('/admin/registrarContrato', [ContratoController::class, 'registrarContrato'])->name('registrarContrato');
    Route::delete('/admin/eliminarContrato/{CODIGO}', [ContratoController::class, 'eliminarContrato']);


    /* GRAFICAS*/
    Route::get('admin/chart', [ChartController::class, 'index'])->name('chart');

    /*CRUD PERMISO */ 
    Route::get('admin/permiso', [permisoController::class, 'listar'])->name('permiso.index');
    Route::get('admin/Genpermiso', [permisoController::class, 'mostr'])->name('Genpermiso.index');
    Route::post('admin/Genpermiso', [permisoController::class, 'store'])->name('registra');
    
});

  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
    Route::get('/manager/asistencia',[JornadaLaboralController::class, 'listarAsistencia'])->name('listar_index'); 
    
    Route::get('/manager/pagoadicional',[PagoadicionaController::class, 'listar'])->name('pagoadicional.index');
    Route::get('/manager/registrarPagoAdiciona',[PagoadicionaController::class, 'registro'])->name('registrarPagoAdciona0');
    Route::POST('/manager/registrarPagoAdiciona',[PagoadicionaController::class, 'registro1'])->name('registrarPagoAdciona1');
});
