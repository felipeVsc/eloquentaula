<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/teste', [EnderecoController::class, 'selecionar']);
Route::post('/teste', [EnderecoController::class, 'criar']);
Route::get('/endereco/all', [EnderecoController::class, 'getAll']);
Route::get('/endereco/one/{id_endereco}', [EnderecoController::class, 'getOne']);
Route::get('/endereco/where/{cidade_endereco}', [EnderecoController::class, 'getOneWhere']);
Route::post('/endereco/updatesingle', [EnderecoController::class, 'updateSingle']);
Route::post('/endereco/updatemass', [EnderecoController::class, 'updateMass']);
