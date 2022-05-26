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

Route::get('/empleado', [EmpleadoController::class, 'create'])->name('empleado.index');