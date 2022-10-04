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
    return view("Welcome");
});
Route::get('conta', [\App\Http\Controllers\ContaController::class, 'index']);
Route::get('clientes', [\App\Http\Controllers\ClientesController::class, 'index']);
//Route::get('fornecedor', [\App\Http\Controllers\FornecedorController::class, 'index']);
//Route::get('peca', [\App\Http\Controllers\PecaController::class, 'index']);
//Route::get('servico', [\App\Http\Controllers\ServicoController::class, 'index']);
//Route::get('atores',[\App\Http\Controllers\AtoresController::class,	'index']);

