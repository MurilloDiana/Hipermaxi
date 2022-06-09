<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;


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
Route::get('/vacaciones', [EmpleadoController::class, 'vac'])->name('vacaciones.index');
Route::post('vacaciones', [EmpleadoController::class, 'asignar'])->name('vacaciones.asignar');

//Route::get('asignarvacaciones', [EmpleadoController::class, 'create'])->name('vacaciones.create');
Route::post('NuevoRegistroEmpleado', [EmpleadoController::class, 'RegistrarEmpleado']);
