<?php

use App\Http\Controllers\SuperController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuarioController;
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


Route::get('/ahorcado', [SuperController::class, 'ahorcado'])->name('ahorcado');
Route::get('/condicionales', [SuperController::class,'condicionales'])->name('condicionales');
Route::get('/info', [SuperController::class, 'info'])->name('info');
Route::get('/arreglos', [SuperController::class, 'arreglos'])->name('arreglos');
Route::get('/array-while', [SuperController::class, 'awhile'])->name('awhile');
Route::get('/patterns', [SuperController::class, 'pat'])->name('pat');
Route::get('/crud', [SuperController::class, 'crud'])->name('crud');

Route::get('/registros', [UserController::class, 'registro'])->name('registro');
Route::get('/ver_municipios', [UserController::class, 'ver_municipios'])->name('ver_municipios');
// Route::get('/ver', [UsuarioController::class, 'ver'])->name('ver');


////? Diferente controlador
Route::get('/user', [UsuarioController::class, 'create'])->name('user.create');
Route::post('/user/store', [UsuarioController::class, 'store'])->name('user.store');
Route::get('/ver_usuarios', [UsuarioController::class, 'ver_usuarios'])->name('ver_usuarios');
Route::get('/ver_nuevo', [UsuarioController::class, 'ver_nuevo'])->name('ver_nuevo');
Route::get('/sin_valores', [UsuarioController::class, 'sin_valores'])->name('sin_valores');
Route::get('/buscar', [UsuarioController::class, 'buscar'])->name('buscar');