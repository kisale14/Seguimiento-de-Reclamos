<?php

use App\Http\Controllers\ApXProController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\NormasController;
use App\Http\Controllers\QuejaController;
use App\Http\Controllers\ReclamosController;
use App\Http\Controllers\RolController;

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

Route::resource('propietario', PropietarioController::class);

Route::get('propietario-{id}', [PropietarioController::class, 'eliminar'])->name('propietario.eliminar');

Route::get('quejas', [ReclamosController::class, 'index'])->name('quejas.index');

Route::post('quejas', [ReclamosController::class, 'createa'])->name('quejas.createa');

Route::get('quejas-{id}', [QuejaController::class, 'delete'])->name('quejas.destroy');

Route::get('ApXPro-{id}', [ApXProController::class, 'create'])->name('apaxpro.create');

Route::post('ApXPro', [ApXProController::class, 'store'])->name('apaxpro.store');

Route::resource('norma', NormasController::class);

Route::get('norma-{id}', [NormasController::class, 'delete'])->name('normas.destroy');

Route::resource('reclamo', QuejaController::class);