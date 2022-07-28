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
USE App\Http\Controllers\GeneradorController;

use App\Http\Controllers\memorandumController;
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

/*GESTINAR ASISTENCIA*/
Route::get('/asistencia',[JornadaLaboralController::class, 'jornadaIndex'])->name('marcarjornada');
Route::post('/marcar',[JornadaLaboralController::class, 'marcarJornada'])->name('registrarjornada');
Route::get('/marcar1',[JornadaLaboralController::class, 'listarAsistencia'])->name('listar_index');


Auth::routes();  

Route::get('/', function () {
    return view('home.index');
});

/*GESTINAR ASISTENCIA*/
Route::get('/marcar_asistencia',[JornadaLaboralController::class, 'marcarAsistencia'])->name('marcar_asistencia');
Route::post('/marcar',[JornadaLaboralController::class, 'marcarJornada'])->name('registrarjornada');


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
    Route::get('/admin/empleado', [EmpleadoController::class, 'listarEmpleados'])->name('adminempleado.index');
    Route::get('/admin/registrar', [EmpleadoController::class, 'registrarEmpleadoFormulario'])->name('formulario.index');
    Route::post('/admin/registrar', [EmpleadoController::class, 'registrarEmpleado'])->name("registrar");
    Route::get('/admin/editar_empleado/{CODIGO}', [EmpleadoController::class, 'edit']);//manda los datos a editar
    Route::put('/admin/actualizar_empleado/{CODIGO}', [EmpleadoController::class, 'update'])->name('actualizarEmpleado');//actualiza los datos*/
    Route::get('/admin/buscar', [EmpleadoController::class, 'buscarEmpleados'])->name("buscar");
    Route::delete('/admin/eliminar/{CODIGO}', [EmpleadoController::class, 'eliminar']);    

    /*CRUD CONTRATO*/
    Route::get('/admin/contrato', [ContratoController::class, 'listarContratos'])->name('contrato.index');
    Route::get('/admin/asignarContrato', [ContratoController::class, 'asignarContrato'])->name('asignarContrato');
    Route::post('/admin/registrarContrato', [ContratoController::class, 'registrarContrato'])->name('registrarContrato');
    Route::delete('/admin/eliminarContrato/{CODIGO}', [ContratoController::class, 'eliminarContrato']);


    /*CURD ANTIGUEDAD*/
    Route::get('/admin/antiguedad', [AntiguedadController::class, 'index'])->name('antiguedad.index');

    /* GRAFICAS*/
    Route::get('/admin/chart', [ChartController::class, 'index'])->name('chart');
    Route::get('/admin/bar-chart', [ChartController::class, 'barChart'])->name('bar-chart');

    /*MEMORANDUM AUXI BEBE*/ /* ---> BORRAR */
    route::get('/memorandum',[memorandumController::class,'index'])->name('memorandum');
    route::post('/memorandum',[memorandumController::class,'store'])->name('memorandumregistro');
    route::get('/PDFmemorandum',[memorandumController::class,'show'])->name('memo');

    /**boleta de pago */
    Route::get('/admin/pago',[BoletaPagoController::class,'index'])->name('solicita');
    Route::post('/admin/pago',[BoletaPagoController::class,'store'])->name('generapago');
    Route::get('/admin/impboleta',[BoletaPagoController::class,'show'])->name('imp');

    /*CRUD DE DESCUENTO*/
    Route::get('/admin/vistaDescuento',[DescuentoController::class, 'index'])->name('mostrar.index');
    Route::get('/admin/generarDescuento',[DescuentoController::class, 'mostrar'])->name('registrardescuento');
    Route::post('/admin/generarDescuento',[DescuentoController::class, 'store'])->name('geenrardescuento');

    /*PAGOADICIONAL*/
    Route::get('/admin/vistaPago',[PagoadicionaController::class, 'listar'])->name('pagoadicional.index');
    Route::get('/admin/generarpagoadicional',[PagoadicionaController::class, 'registro'])->name('registrarPagoAdciona0');
    Route::post('/admin/generarpagoadicional',[PagoadicionaController::class, 'registro1'])->name('registrarPagoAdciona0');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/

Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');    
    Route::get('/manager/asistencia',[JornadaLaboralController::class, 'jornadaLaboral'])->name('listar_index');     

/*Route::middleware(['auth', 'user-access:manager'])->group(function () {    
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');*/
    
    /*CRUD HORARIO*/
    Route::get('/manager/horario', [HorarioController::class, 'listarHorarios'])->name('horario.index');
    Route::get('/manager/asignar', [HorarioController::class, 'asignarHorarios'])->name("asignar");
    Route::put('/manager/actualizar_horario/{CODIGO}', [HorarioController::class, 'update'])->name('actualizarHorario');
    
    /* ASISTENCIA */
    Route::get('/manager/buscar_asistencia',[JornadaLaboralController::class, 'buscarAsistencia'])->name('buscar_index'); 
    Route::get('/manager/lista_asistencia',[JornadaLaboralController::class, 'listarAsistencia'])->name('listar_index');    

    /* FALTAS */
    Route::get('/manager/falta',[FaltaJustifiController::class, 'index'])->name('mostrar');
    Route::get('/manager/faltajustificada',[FaltaJustifiController::class, 'index2'])->name('generar');
    Route::post('/manager/faltajustificada',[FaltaJustifiController::class, 'store'])->name('ingresar');        
    
    /*ADMINISTRAR ASISTENCIAS*/
    Route::get('/manager/registrarfalta', function(){
        return view('registrarFaltas');
    });
    Route::post('/manager/asignarFalta', [FaltaController::class, 'registrarFaltas'])->name('asignarFalta');
    Route::get('/manager/falta', [FaltaController::class, 'listarFaltas'])->name('faltas');

    /* CRUD PERMISO*/
    Route::get('/manager/permiso',[permisoController::class,'listar'])->name('lista.index');
    Route::get('/manager/Genpermiso',[permisoController::class, 'mostr'])->name('Genpermiso.index');
    Route::post('/manager/Genpermiso',[permisoController::class, 'store'])->name('registra');
});


