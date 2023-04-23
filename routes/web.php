<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
 
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'], function () {
    echo Artisan::call('config:clear');
    echo Artisan::call('config:cache');
    echo Artisan::call('cache:clear');
    echo Artisan::call('route:clear');
    echo Artisan::call('permission:cache-reset');
    })->name('home');

// Rutas del Controlador de Contenciones

Route::get('/contencioneslis', [App\Http\Controllers\ContencionController::class, 'index'])->name('contenciones.index');

Route::get('/contenciones/nuevo',[App\Http\Controllers\ContencionController::class, 'create'])
    ->name('contenciones.create');

Route::get('/contenciones/{contencion}/editar',[App\Http\Controllers\ContencionController::class, 'edit'])
    ->name('contenciones.edit');

 Route::get('/contencionesup/{contencion}',[App\Http\Controllers\ContencionController::class, 'update'])
    ->name('contenciones.update');

Route::get('/contenciones/{contencion}',[App\Http\Controllers\ContencionController::class, 'destroy'])
    ->name('contenciones.destroy');

Route::get('/contenciones',[App\Http\Controllers\ContencionController::class, 'store'])
    ->name('contenciones.store');


  // Rutas del Controlador de Planes

Route::get('/planeslis', [App\Http\Controllers\PlanController::class, 'index'])->name('planes.index');

Route::get('/planes/nuevo',[App\Http\Controllers\PlanController::class, 'create'])
    ->name('planes.create');

Route::get('/planes/{plan}/editar',[App\Http\Controllers\PlanController::class, 'edit'])
    ->name('planes.edit');

 Route::get('/planesup/{plan}',[App\Http\Controllers\PlanController::class, 'update'])
    ->name('planes.update');

Route::get('/planes/{plan}',[App\Http\Controllers\PlanController::class, 'destroy'])
    ->name('planes.destroy');

Route::get('/planes',[App\Http\Controllers\PlanController::class, 'store'])
    ->name('planes.store');


  // Rutas del Controlador de Satelites

Route::get('/sateliteslis', [App\Http\Controllers\SateliteController::class, 'index'])->name('satelites.index');

Route::get('/satelites/nuevo',[App\Http\Controllers\SateliteController::class, 'create'])
    ->name('satelites.create');

Route::get('/satelites/{satelite}/editar',[App\Http\Controllers\SateliteController::class, 'edit'])
    ->name('satelites.edit');

 Route::get('/satelitesup/{satelite}',[App\Http\Controllers\SateliteController::class, 'update'])
    ->name('satelites.update');

Route::get('/satelites/{satelite}',[App\Http\Controllers\SateliteController::class, 'destroy'])
    ->name('satelites.destroy');

Route::get('/satelites',[App\Http\Controllers\SateliteController::class, 'store'])
    ->name('satelites.store');


// Rutas del Controlador de Clientes

Route::get('/clientesbus', [App\Http\Controllers\ClienteController::class, 'index'])->name('clientes.index');

Route::get('/clienteslis', [App\Http\Controllers\ClienteController::class, 'search'])->name('clientes.search');

Route::get('/clientes/nuevo',[App\Http\Controllers\ClienteController::class, 'create'])
    ->name('clientes.create');

Route::get('/clientes/{cliente}/editar',[App\Http\Controllers\ClienteController::class, 'edit'])
    ->name('clientes.edit');

 Route::get('/clientesup/{cliente}',[App\Http\Controllers\ClienteController::class, 'update'])
    ->name('clientes.update');

Route::get('/clientes/{cliente}',[App\Http\Controllers\ClienteController::class, 'destroy'])
    ->name('clientes.destroy');

Route::get('/clientes',[App\Http\Controllers\ClienteController::class, 'store'])
    ->name('clientes.store');


// Rutas del Controlador de Remotas

Route::get('/remotasbus', [App\Http\Controllers\RemotaController::class, 'index'])->name('remotas.index');

Route::get('/remotas/monitoreo', [App\Http\Controllers\RemotaController::class, 'monitoreo'])->name('remotas.monitoreo');

Route::get('/remotaslis', [App\Http\Controllers\RemotaController::class, 'search'])->name('remotas.search');

Route::get('/remotas/nuevo',[App\Http\Controllers\RemotaController::class, 'create'])
    ->name('remotas.create');

Route::get('/remotas/{remota}/editar',[App\Http\Controllers\RemotaController::class, 'edit'])
    ->name('remotas.edit');

 Route::get('/remotasup/{remota}',[App\Http\Controllers\RemotaController::class, 'update'])
    ->name('remotas.update');

Route::get('/remotas/{remota}',[App\Http\Controllers\RemotaController::class, 'destroy'])
    ->name('remotas.destroy');

Route::get('/remotas',[App\Http\Controllers\RemotaController::class, 'store'])
    ->name('remotas.store');

Route::get('/remotasshow/{remota}',[App\Http\Controllers\RemotaController::class, 'show'])
    ->name('remotas.show');

Route::get('/remotashis', [App\Http\Controllers\RemotaController::class, 'index2'])->name('remotas.index2');

Route::get('/remotassearchlis/{request}/listado', [App\Http\Controllers\RemotaController::class, 'searchlis'])->name('remotas.searchlis');


// Rutas de los controladores de Reportes

Route::get('/listadoes',[App\Http\Controllers\ReportesController::class, 'index'])->name('listadoes.index');

Route::get('/listadoespdf',[App\Http\Controllers\ReportesController::class, 'generar'])->name('listadoespdf.index');

Route::get('/estacionescli', [App\Http\Controllers\ReportesController::class, 'index2'])->name('estacionescli.index');

Route::get('/estacionesclirep', [App\Http\Controllers\ReportesController::class, 'search'])->name('estacionescli.search');


// Rutas para el controlador de registro de usuarios

Route::get('/registerindex',[App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register.index');

Route::get('/registelis',[App\Http\Controllers\Auth\RegisterController::class, 'search'])->name('register.search');

Route::get('/register/{user}/editar',[App\Http\Controllers\Auth\RegisterController::class, 'edit'])
    ->name('register.edit');

Route::get('/register/{user}',[App\Http\Controllers\Auth\RegisterController::class, 'destroy'])
    ->name('register.destroy');

Route::get('/registerup/{user}',[App\Http\Controllers\Auth\RegisterController::class, 'update'])
    ->name('register.update');

});



