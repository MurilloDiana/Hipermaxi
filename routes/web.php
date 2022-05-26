<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

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

Route::post('NuevoRegistroEmpleado', [EmpleadoController::class, 'RegistrarEmpleado']);
