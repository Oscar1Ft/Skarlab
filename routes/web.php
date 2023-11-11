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
    return view('welcome');
});

Route::get('/index', function () {
    return view('modulos.index');
});
Route::get('/consultar',[ProductosController::class,'consultar'])->name('consulta');
Route::post('/consultar',[ProductosController::class,'store'])->name('insercion');

Route::get('/insert/{id}',[ProductosController::class,'show'])->name('consulta-uno');

Route::patch('/insert/{id}',[ProductosController::class,'update'])->name('actualizar-producto');
Route::delete('/insert/{id}',[ProductosController::class,'destroy'])->name('eliminar-producto');

