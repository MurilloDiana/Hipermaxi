<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ChartController;
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

// Route::get('/', function () {
//     return view('sidebar');
// });

Route:: get('/', function() {
    return view('home');
});
Route:: get('/contrato', function() {
    return view('contrato');
});
Route:: get('/chart', [ChartController::class,'index']);

Route::get('/bar-chart', [ChartController::class,'barChart']);
Route::get('/circular', [ChartController::class,'circular']);

Route::get('login', [LoginController::class, 'index'])->name('login');

Route::post('login', [LoginCOntroller::class, 'store']);

Route::post('logout', [LoginController::class, 'destroy'])->name('logout');














Route::get('/empleado', [EmpleadoController::class, 'listarEmpleados'])->name('empleado');
//Route::get('/empleado'{nombre que se va escribir en la url}, [EmpleadoController::class, 'mostrar']{funcion a llamar de controllers});
Route::post('/registrar', [EmpleadoController::class, 'registrarEmpleado'])->name("registrar");
Route::post('/eliminar_usuario', [EmpleadoController::class, 'eliminar'])->name("eliminar");
Route::delete('eliminar/{CODIGO}', [EmpleadoController::class, 'eliminar'])->name('eliminar');//elimina
Route::get('editar_empleado/{CODIGO}', [EmpleadoController::class, 'edit']);//manda los datos a editar
Route::put('actualizar_empleado/{CODIGO}', [EmpleadoController::class, 'update']);//actualiza los datos*/