<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\AntiguedadController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AsistenciaController;


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

Route::get('/', function () {
    return view('home');
});
  
Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/empleado', [EmpleadoController::class, 'listarEmpleados'])->name('empleado.index');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});




















Route::group(['namespace' => 'App\Http\Controllers'], function(){   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');
    

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
        /*FINALIZAR SESSION*/
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        /*MENSAJE POR ROUTE*/
        Route::get('/saludo', function () {
            return 'Hello World';
        });

        /*CRUD EMPLEADOS*/
        //Route::get('/empleado', [EmpleadoController::class, 'listarEmpleados'])->name('empleado.index');
        Route::post('/registrar', [EmpleadoController::class, 'registrarEmpleado'])->name("registrar");
        Route::get('editar_empleado/{CODIGO}', [EmpleadoController::class, 'edit']);//manda los datos a editar
        Route::put('actualizar_empleado/{CODIGO}', [EmpleadoController::class, 'update'])->name('actualizarEmpleado');//actualiza los datos*/
        Route::delete('/eliminar/{CODIGO}', [EmpleadoController::class, 'eliminar']);

        /*VITACORAS*/
        Route::get('/chart', [ChartController::class,'index'])->name('chart.index');        
        Route::get('/bar-chart', [ChartController::class,'barChart'])->name('bar-char.index');
        Route::get('/circular', [ChartController::class,'circular'])->name('circular.index');

        /*CRUD ANTIGUEDADES*/
        Route::get('/antiguedad', [AntiguedadController::class, 'index'])->name('antiguedad.index');

        /*CRUD ASISTENCIAS */
        Route::get('/asistencia',[AsistenciaController::class, 'listar'])->name('asistencias.index');
        
    });
});

/*
Route::get('login', [LoginController::class, 'index'])->name('login');

Route::post('login', [LoginCOntroller::class, 'store']);

Route::post('logout', [LoginController::class, 'destroy'])->name('logout');*/















//Route::get('/empleado'{nombre que se va escribir en la url}, [EmpleadoController::class, 'mostrar']{funcion a llamar de controllers});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
