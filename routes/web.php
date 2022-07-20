<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\AntiguedadController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\JornadaLaboralController;
use App\Http\Controllers\FaltaController;
use App\Http\Controllers\permisoController;
use App\Http\Controllers\PagoadicionaController;
use App\Http\Controllers\DescuentoController;
USE App\Http\Controllers\BoletaPagoController;
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
   
Route::get('/hola', function () {
    return "hola mundo";
});
Route::get('/pago',[BoletaPagoController::class,'index'])->name('solicita');
Route::post('/pago',[BoletaPagoController::class,'store'])->name('generapago');



/*GESTINAR ASISTENCIA*/
Route::get('/asistencia',[JornadaLaboralController::class, 'jornadaIndex'])->name('marcarjornada');
Route::post('/marcar',[JornadaLaboralController::class, 'marcarJornada'])->name('registrarjornada');
Route::get('/marcar1',[JornadaLaboralController::class, 'listarAsistencia'])->name('listar_index');
/* CRUD PERMISO*/
Route::get('/permiso',[permisoController::class,'listar'])->name('lista.index');
Route::get('/Genpermiso',[permisoController::class, 'mostr'])->name('Genpermiso.index');
Route::post('/Genpermiso',[permisoController::class, 'store'])->name('registra');
/*CRUD DE DESCUENTO*/
Route::get('/vistaDescuento',[DescuentoController::class, 'index'])->name('mostrar.index');
Route::get('/generarDescuento',[DescuentoController::class, 'mostrar'])->name('registrardescuento');
Route::post('/generarDescuento',[DescuentoController::class, 'store'])->name('geenrardescuento');
/*PAGOADICIONAL*/
Route::get('/vistaPago',[PagoadicionaController::class, 'listar'])->name('pagoadicional.index');
Route::get('/generarpagoadicional',[PagoadicionaController::class, 'registro'])->name('registrarPagoAdciona0');
Route::post('/generarpagoadicional',[PagoadicionaController::class, 'registro1'])->name('registrarPagoAdciona0');

Auth::routes();  

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login2', function () {
    return view('login2');
}); 
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

    /*CURD ANTIGUEDAD*/
    Route::get('/admin/antiguedad', [AntiguedadController::class, 'index'])->name('antiguedad.index');

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
    Route::get('/manager/asistencia',[JornadaLaboralController::class, 'jornadaLaboral'])->name('listar_index');     
    
    /*ADMINISTRAR ASISTENCIAS*/
    Route::get('/registrarfalta', function(){
        return view('registrarFaltas');
    });
    Route::post('/asignarFalta', [FaltaController::class, 'registrarFaltas'])->name('asignarFalta');
    Route::get('/falta', [FaltaController::class, 'listarFaltas'])->name('faltas');
});

