<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\LoginController;



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
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        
        Route::get('/saludo', function () {
            return 'Hello World';
        });

        Route::get('/empleado', [EmpleadoController::class, 'listarEmpleados'])->name('empleado.index');

        Route:: get('/hola', function() {
            return "hola mundo";
        });
    });
});
/*
Route::get('login', [LoginController::class, 'index'])->name('login');

Route::post('login', [LoginCOntroller::class, 'store']);

Route::post('logout', [LoginController::class, 'destroy'])->name('logout');*/















//Route::get('/empleado'{nombre que se va escribir en la url}, [EmpleadoController::class, 'mostrar']{funcion a llamar de controllers});
Route::post('/registrar', [EmpleadoController::class, 'registrarEmpleado'])->name("registrar");
Route::post('/eliminar_usuario', [EmpleadoController::class, 'eliminar'])->name("eliminar");
Route::delete('eliminar/{CODIGO}', [EmpleadoController::class, 'eliminar'])->name('eliminar');//elimina
Route::get('editar_empleado/{CODIGO}', [EmpleadoController::class, 'edit']);//manda los datos a editar
Route::put('actualizar_empleado/{CODIGO}', [EmpleadoController::class, 'update'])->name('actualizarEmpleado');//actualiza los datos*/