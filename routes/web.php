<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;


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
Route:: view ('login','login');
Route:: view('sidebar','siderbar');
Route:: get('/', function() {
    return view('login');
});
Route:: get('/404', function() {
    return view('404');
});
Route:: get('/usuario', function() {
    return view('usuario');
});
Route:: get('/home', function() {
    return view('home');
});

Route::get('/empleado', [EmpleadoController::class, 'listarEmpleados']);
//Route::get('/empleado', [EmpleadoController::class, 'mostrarLista']);
//Route::get('/empleado'{nombre que se va escribir en la url}, [EmpleadoController::class, 'mostrar']{funcion a llamar de controllers});

Route::post('/registrar', [EmpleadoController::class, 'registrarEmpleado'])->name("registrar");
//Route::post('/eliminar_usuario', [EmpleadoController::class, 'eliminar'])->name("eliminar");
Route::delete('eliminar/{CODIGO}', [EmpleadoController::class, 'eliminar'])->name('eliminar');//elimina
Route::get('editar_empleado/{CODIGO}', [EmpleadoController::class, 'edit']);//manda los datos a editar
Route::put('actualizar_empleado/{CODIGO}', [EmpleadoController::class, 'update']);//actualiza los datos
//Caso de uso Gestion Antiguedad
Route:: get('/antiguedad', function() {
    return view('antiguedad');
});