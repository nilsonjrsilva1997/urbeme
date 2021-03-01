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

    Route::group(['prefix' => 'documento'], function () {
        Route::get('/', [\App\Http\Controllers\DocumentoController::class, 'index']);
        Route::get('show/{id}/', [\App\Http\Controllers\DocumentoController::class, 'show']);
        Route::post('create/', [\App\Http\Controllers\DocumentoController::class, 'create']);
        Route::put('update/{id}', [\App\Http\Controllers\DocumentoController::class, 'update']);
        Route::delete('destroy/{id}', [\App\Http\Controllers\DocumentoController::class, 'destroy']);
    });

    Route::group(['prefix' => 'endereco_usuario'], function () {
        Route::get('/', [\App\Http\Controllers\EnderecoController::class, 'index']);
        Route::get('show/{id}/', [\App\Http\Controllers\EnderecoController::class, 'show']);
        Route::post('create/', [\App\Http\Controllers\EnderecoController::class, 'create']);
        Route::put('update/{id}', [\App\Http\Controllers\EnderecoController::class, 'update']);
        Route::delete('destroy/{id}', [\App\Http\Controllers\EnderecoController::class, 'destroy']);
    });

    Route::group(['prefix' => 'empreendimento'], function () {
        Route::get('/', [\App\Http\Controllers\EmpreendimentoController::class, 'index']);
        Route::get('show/{id}/', [\App\Http\Controllers\EmpreendimentoController::class, 'show']);
        Route::post('create/', [\App\Http\Controllers\EmpreendimentoController::class, 'create']);
        Route::put('update/{id}', [\App\Http\Controllers\EmpreendimentoController::class, 'update']);
        Route::delete('destroy/{id}', [\App\Http\Controllers\EmpreendimentoController::class, 'destroy']);
    });

    
    Route::group(['prefix' => 'estado_civil'], function () {
        Route::get('/', [\App\Http\Controllers\EstadoCivilController::class, 'index']);
        Route::get('show/{id}/', [\App\Http\Controllers\EstadoCivilController::class, 'show']);
        Route::post('create/', [\App\Http\Controllers\EstadoCivilController::class, 'create']);
        Route::put('update/{id}', [\App\Http\Controllers\EstadoCivilController::class, 'update']);
        Route::delete('destroy/{id}', [\App\Http\Controllers\EstadoCivilController::class, 'destroy']);
    });

    Route::group(['prefix' => 'foto_empreendimento'], function () {
        Route::get('/', [\App\Http\Controllers\FotoEmpreendimentoController::class, 'index']);
        Route::get('show/{id}/', [\App\Http\Controllers\FotoEmpreendimentoController::class, 'show']);
        Route::post('create/', [\App\Http\Controllers\FotoEmpreendimentoController::class, 'create']);
        Route::put('update/{id}', [\App\Http\Controllers\FotoEmpreendimentoController::class, 'update']);
        Route::delete('destroy/{id}', [\App\Http\Controllers\FotoEmpreendimentoController::class, 'destroy']);
    });

    Route::group(['prefix' => 'banco'], function () {
        Route::get('/', [\App\Http\Controllers\BancoController::class, 'index']);
        Route::get('show/{id}/', [\App\Http\Controllers\BancoController::class, 'show']);
        Route::post('create/', [\App\Http\Controllers\BancoController::class, 'create']);
        Route::put('update/{id}', [\App\Http\Controllers\BancoController::class, 'update']);
        Route::delete('destroy/{id}', [\App\Http\Controllers\BancoController::class, 'destroy']);
    });


    Route::group(['prefix' => 'dados_bancarios'], function () {
        Route::get('/', [\App\Http\Controllers\DadoBancarioController::class, 'index']);
        Route::post('create/', [\App\Http\Controllers\DadoBancarioController::class, 'create']);
        Route::put('update/{id}', [\App\Http\Controllers\DadoBancarioController::class, 'update']);
    });

    Route::group(['prefix' => 'dados_pessoais'], function () {
        Route::get('/', [\App\Http\Controllers\UsuarioController::class, 'index']);
        Route::post('update/', [\App\Http\Controllers\UsuarioController::class, 'salvarDadosPessoais']);
        Route::post('upload_foto/', [\App\Http\Controllers\UsuarioController::class, 'uploadFoto']);
        Route::post('upload_foto_update/', [\App\Http\Controllers\UsuarioController::class, 'uploadFotoUpdate']);
    });
});

Route::group(['prefix' => 'empreendimento'], function () {
    Route::get('/', [\App\Http\Controllers\EmpreendimentoController::class, 'index']);
});

Route::post('register/', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('login/', [\App\Http\Controllers\AuthController::class, 'login']);
