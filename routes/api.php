<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BancoController;
use App\Http\Controllers\DadoBancarioController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\EmpreendimentoController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\EnderecoIncorporadoraController;
use App\Http\Controllers\EstadoCivilController;
use App\Http\Controllers\FotoEmpreendimentoController;
use App\Http\Controllers\InvestimentoController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\IncorporadoraController;
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
        Route::get('/', [EnderecoIncorporadoraController::class, 'index']);
        Route::get('show/{id}/', [EnderecoIncorporadoraController::class, 'show']);
        Route::post('create/', [EnderecoIncorporadoraController::class, 'create']);
        Route::put('update/{id}', [EnderecoIncorporadoraController::class, 'update']);
        Route::delete('destroy/{id}', [EnderecoIncorporadoraController::class, 'destroy']);
    });

    Route::group(['prefix' => 'documento'], function () {
        Route::get('/', [DocumentoController::class, 'index']);
        Route::post('create/', [DocumentoController::class, 'create']);
    });

    Route::group(['prefix' => 'investimento'], function () {
        Route::get('/', [InvestimentoController::class, 'index']);
        Route::get('slug/{slug}', [InvestimentoController::class, 'getBySlug']);
        Route::get('show/{id}/', [InvestimentoController::class, 'show']);
        Route::post('create/', [InvestimentoController::class, 'create']);
        Route::put('update/{id}', [InvestimentoController::class, 'update']);
        Route::delete('destroy/{id}', [InvestimentoController::class, 'destroy']);
    });

    Route::post('resetar_senha/', [PasswordController::class, 'resetarSenha']);

    Route::group(['prefix' => 'endereco_usuario'], function () {
        Route::get('/', [EnderecoController::class, 'index']);
        Route::get('show/{id}/', [EnderecoController::class, 'show']);
        Route::post('create/', [EnderecoController::class, 'create']);
        Route::put('update/{id}', [EnderecoController::class, 'update']);
        Route::delete('destroy/{id}', [EnderecoController::class, 'destroy']);
    });

    Route::group(['prefix' => 'investidores'], function () {
        Route::get('/{empreendimento_id}', [InvestimentoController::class, 'investidores']);
    });

    Route::group(['prefix' => 'empreendimento'], function () {
        Route::post('create/', [EmpreendimentoController::class, 'create']);
        Route::put('update/{id}', [EmpreendimentoController::class, 'update']);
        Route::delete('destroy/{id}', [EmpreendimentoController::class, 'destroy']);
    });

    Route::group(['prefix' => 'incorporadora'], function () {
        Route::get('/', [IncorporadoraController::class, 'index']);
        Route::get('show/{id}/', [IncorporadoraController::class, 'show']);
        Route::post('create/', [IncorporadoraController::class, 'create']);
        Route::put('update/{id}', [IncorporadoraController::class, 'update']);
        Route::delete('destroy/{id}', [IncorporadoraController::class, 'destroy']);
    });

    Route::group(['prefix' => 'estado_civil'], function () {
        Route::get('/', [EstadoCivilController::class, 'index']);
        Route::get('show/{id}/', [EstadoCivilController::class, 'show']);
        Route::post('create/', [EstadoCivilController::class, 'create']);
        Route::put('update/{id}', [EstadoCivilController::class, 'update']);
        Route::delete('destroy/{id}', [EstadoCivilController::class, 'destroy']);
    });

    Route::group(['prefix' => 'foto_empreendimento'], function () {
        Route::get('/', [FotoEmpreendimentoController::class, 'index']);
        Route::post('create/', [FotoEmpreendimentoController::class, 'create']);
        Route::put('update/{id}', [FotoEmpreendimentoController::class, 'update']);
        Route::delete('destroy/{id}', [FotoEmpreendimentoController::class, 'destroy']);
    });

    Route::group(['prefix' => 'banco'], function () {
        Route::get('/', [BancoController::class, 'index']);
        Route::get('show/{id}/', [BancoController::class, 'show']);
        Route::post('create/', [BancoController::class, 'create']);
        Route::put('update/{id}', [BancoController::class, 'update']);
        Route::delete('destroy/{id}', [BancoController::class, 'destroy']);
    });


    Route::group(['prefix' => 'dados_bancarios'], function () {
        Route::get('/', [DadoBancarioController::class, 'index']);
        Route::post('create/', [DadoBancarioController::class, 'create']);
        Route::put('update/{id}', [DadoBancarioController::class, 'update']);
    });

    Route::group(['prefix' => 'dados_pessoais'], function () {
        Route::get('/', [UsuarioController::class, 'index']);
        Route::post('update/', [UsuarioController::class, 'salvarDadosPessoais']);
        Route::post('upload_foto/', [UsuarioController::class, 'uploadFoto']);
        Route::post('upload_foto_update/', [UsuarioController::class, 'uploadFotoUpdate']);
    });

    Route::group(['prefix' => 'usuario'], function () {
        Route::get('/meus_investimentos', [UsuarioController::class, 'meusInvestimentos']);
    });
});


Route::group(['prefix' => 'empreendimento'], function () {
    Route::get('/', [EmpreendimentoController::class, 'index']);
    Route::get('show/{id}/', [FotoEmpreendimentoController::class, 'show']);
    Route::get('slug/{slug}', [EmpreendimentoController::class, 'getEmpreendimentoBySlug']);
    Route::get('finalizados/', [EmpreendimentoController::class, 'getProjetosFinalizados']);
});

Route::post('register/', [AuthController::class, 'register']);
Route::post('login/', [AuthController::class, 'login']);
