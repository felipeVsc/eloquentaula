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

// Token CSRF pra o Postman

Route::get('/token', [EnderecoController::class, 'getCSRFToken']);


// Endereco Controller

// Create
Route::post('/endereco/create', [EnderecoController::class, 'criarUm']);
Route::post('/endereco/create2', [EnderecoController::class, 'criarDois']);

// Read

Route::get('/endereco/all', [EnderecoController::class, 'getAll']);
Route::get('/endereco/one/{id_endereco}', [EnderecoController::class, 'getOne']);
Route::get('/endereco/where/{cidade_endereco}', [EnderecoController::class, 'getOneWhere']);
Route::get('/endereco/cliente/{id_endereco}', [EnderecoController::class, 'getClienteEndereco']);

// Update

Route::post('/endereco/updatesingle', [EnderecoController::class, 'updateSingle']);
Route::post('/endereco/updatemass', [EnderecoController::class, 'updateMass']);

// Editora Controller

Route::get('/editora/{id_livro}', [EditoraController::class, 'getEditoraFromLivro']);
Route::get('/editora2/{id_editora}', [EditoraController::class, 'getLivroFromEditora']);
Route::get('/editora/livro/{titulo_livro}&{id_editora}', [EditoraController::class, 'createEditoraUsingLivro']);