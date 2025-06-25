<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);

Route::get('/veiculo/formulario', [App\Http\Controllers\VeiculoController::class, 'formulario'])->name('veiculo-form');
Route::post('/veiculo/store', [App\Http\Controllers\VeiculoController::class, 'store'])->name('veiculo-store');
Route::get('/veiculo/listar', [App\Http\Controllers\VeiculoController::class, 'list'])->name('veiculo-list');
Route::get('/veiculo/remover/{id}', [App\Http\Controllers\VeiculoController::class, 'remove'])->name('veiculo-remove');
Route::get('/veiculo/editar/{id}', [App\Http\Controllers\VeiculoController::class, 'edit'])->name('veiculo-edit');


Route::get('/proprietario/formulario', [App\Http\Controllers\ProprietarioController::class, 'formulario'])->name('proprietario-form');
Route::post('/proprietario/store', [App\Http\Controllers\ProprietarioController::class, 'store'])->name('proprietario-store');
Route::get('/proprietario/listar', [App\Http\Controllers\ProprietarioController::class, 'list']);
Route::get('/proprietario/remover/{id}', [App\Http\Controllers\ProprietarioController::class, 'remove'])->name('proprietario-remove');
Route::get('/proprietario/editar/{id}', [App\Http\Controllers\ProprietarioController::class, 'edit'])->name('proprietario-edit');


Route::get('/anuncio/formulario', [App\Http\Controllers\AnuncioController::class, 'formulario'])->name('anuncio-form');
Route::post('/anuncio/store', [App\Http\Controllers\AnuncioController::class, 'store'])->name('anuncio-store');
Route::get('/anuncio/listar', [App\Http\Controllers\AnuncioController::class, 'list']);
Route::get('/anuncio/remover/{id}', [App\Http\Controllers\AnuncioController::class, 'remove'])->name('anuncio-remove');
Route::get('/anuncio/editar/{id}', [App\Http\Controllers\AnuncioController::class, 'edit'])->name('anuncio-edit');


