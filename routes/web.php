<?php

use App\Http\Controllers\EnderecoController;
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

Route::get('/', [EnderecoController::class, 'dashboard'])->name('dashboard');
Route::get('/listadeceps', [EnderecoController::class, 'listaDeCeps'])->name('listadeceps');
Route::get('/inserirnovocep', [EnderecoController::class, 'novoCep'])->name('novoCep');
Route::post('/inserirnovocep', [EnderecoController::class, 'salvarCep'])->name('salvarCep');
Route::delete('/listadeceps/apagar/{id}', [EnderecoController::class, 'deletarEndereco'])->name('deletarEndereco');
Route::post('/carregarceps', [EnderecoController::class, 'apiCeps'])->name('apiCeps');

Route::get('/ordenarBairro', [EnderecoController::class, 'ordenarBairro'])->name('ordenarBairro');
Route::get('/ordenarCidade', [EnderecoController::class, 'ordenarCidade'])->name('ordenarCidade');
Route::get('/ordenarUF/{true}', [EnderecoController::class, 'ordenarUF'])->name('ordenarUF');

