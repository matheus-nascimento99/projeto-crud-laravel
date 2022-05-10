<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
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

Route::prefix('/clientes')->group(function(){

    Route::get('/', [ClientesController::class, 'index'])->name('clientes.index');

    Route::get('create', [ClientesController::class, 'create'])->name('clientes.create');
    Route::post('create', [ClientesController::class, 'createAction']);

    Route::get('edit/{id}', [ClientesController::class, 'edit'])->name('clientes.edit');
    Route::post('edit/{id}', [ClientesController::class, 'editAction']);

    Route::get('remove/{id}', [ClientesController::class, 'removeAction'])->name('clientes.remove');

});