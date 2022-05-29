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


Route:: get('/empleado', function() {
    return view('empleado');
});

Route::get('/empleado1', [EmpleadoController::class, 'mostrar1']);
Route::get('/empleado2', [EmpleadoController::class, 'mostrar2']);
//Route::get('/empleado'{nombre que se va escribir en la url}, [EmpleadoController::class, 'mostrar']{funcion a llamar de controllers});