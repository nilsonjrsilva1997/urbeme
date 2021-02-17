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

Route::group(['middleware' => ['auth:api']], function () {
    Route::group(['prefix' => 'endereco_incorporadora'], function () {
        Route::get('/', [\App\Http\Controllers\EnderecoIncorporadoraController::class, 'index']);
        Route::get('show/{id}/', [\App\Http\Controllers\EnderecoIncorporadoraController::class, 'show']);
        Route::post('create/', [\App\Http\Controllers\EnderecoIncorporadoraController::class, 'create']);
        Route::put('update/{id}', [\App\Http\Controllers\EnderecoIncorporadoraController::class, 'update']);
        Route::delete('destroy/{id}', [\App\Http\Controllers\EnderecoIncorporadoraController::class, 'destroy']);
    });

    Route::group(['prefix' => 'empreendimento'], function () {
        Route::get('/', [\App\Http\Controllers\EmpreendimentoController::class, 'index']);
        Route::get('show/{id}/', [\App\Http\Controllers\EmpreendimentoController::class, 'show']);
        Route::post('create/', [\App\Http\Controllers\EmpreendimentoController::class, 'create']);
        Route::put('update/{id}', [\App\Http\Controllers\EmpreendimentoController::class, 'update']);
        Route::delete('destroy/{id}', [\App\Http\Controllers\EmpreendimentoController::class, 'destroy']);
    });

    Route::group(['prefix' => 'foto_empreendimento'], function () {
        Route::get('/', [\App\Http\Controllers\FotoEmpreendimentoController::class, 'index']);
        Route::get('show/{id}/', [\App\Http\Controllers\FotoEmpreendimentoController::class, 'show']);
        Route::post('create/', [\App\Http\Controllers\FotoEmpreendimentoController::class, 'create']);
        Route::put('update/{id}', [\App\Http\Controllers\FotoEmpreendimentoController::class, 'update']);
        Route::delete('destroy/{id}', [\App\Http\Controllers\FotoEmpreendimentoController::class, 'destroy']);
    });
});

Route::post('register/', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('login/', [\App\Http\Controllers\AuthController::class, 'login']);
