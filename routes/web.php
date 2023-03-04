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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas del Controlador de Contenciones

Route::get('/contenciones', [App\Http\Controllers\ContencionController::class, 'index'])->name('contenciones.index');

Route::get('/contenciones/{plan}','ContencionController@detalle')
    ->where('plan', '[0-9]+')
    ->name('contenciones.detalle');

Route::get('/contenciones/nuevo','ContencionController@nuevo')
    ->name('contenciones.nuevo');

Route::post('/contenciones', 'ContencionController@crear');

Route::get('/contenciones/{plan}/editar', 'ContencionController@editar')
    ->name('contenciones.editar');

Route::put('/contenciones/{plan}', 'ContencionController@actualizar');

Route::delete('/contenciones/{plan}', 'ContencionController@borrar')
    ->name('contenciones.borrar');