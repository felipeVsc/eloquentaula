<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\EditoraController;
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

Route::get('/token', [EnderecoController::class, 'getCSRFToken']);

// Route::get('/teste', [EnderecoController::class, 'selecionar']);
Route::post('/teste', [EnderecoController::class, 'criarUm']);
Route::get('/endereco/all', [EnderecoController::class, 'getAll']);
Route::get('/endereco/one/{id_endereco}', [EnderecoController::class, 'getOne']);
Route::get('/endereco/where/{cidade_endereco}', [EnderecoController::class, 'getOneWhere']);
Route::post('/endereco/updatesingle', [EnderecoController::class, 'updateSingle']);
Route::post('/endereco/updatemass', [EnderecoController::class, 'updateMass']);
Route::get('/endereco/cliente/{id_endereco}', [EnderecoController::class, 'getClienteEndereco']);

Route::get('/editora', [EditoraController::class, 'testar']);
Route::get('/editora/livro', [EditoraController::class, 'createEditoraUsingLivro']);