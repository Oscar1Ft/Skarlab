<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user');
});

Route::get('/insert', function () {
    return view('modulos.index');
});
Route::get('/consultar',[ProductosController::class,'index'])->name('consulta');

Route::post('/insert',[ProductosController::class,'store'])->name('insercion');
Route::patch('/insert',[ProductosController::class,'store'])->name('actualizar-producto');
Route::delete('/insert',[ProductosController::class,'store'])->name('eliminar-producto');

