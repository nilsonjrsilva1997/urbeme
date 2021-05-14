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

// click sign hooks

Route::group(['prefix' => 'clicksign'], function () {
    Route::group(['prefix' => 'hooks'], function () {
        Route::post('sign', [\App\Http\Controllers\ValidateHookController::class, 'validateHooks']);
    });
});

Route::group(['middleware' => ['auth:api']], function () {

    Route::group(['prefix' => 'endereco_incorporadora'], function () {
        Route::get('/', [\App\Http\Controllers\EnderecoIncorporadoraController::class, 'index']);
        Route::get('show/{id}/', [\App\Http\Controllers\EnderecoIncorporadoraController::class, 'show']);
        Route::post('create/', [\App\Http\Controllers\EnderecoIncorporadoraController::class, 'create']);
        Route::put('update/{id}', [\App\Http\Controllers\EnderecoIncorporadoraController::class, 'update']);
        Route::delete('destroy/{id}', [\App\Http\Controllers\EnderecoIncorporadoraController::class, 'destroy']);
    });

    Route::group(['prefix' => 'document'], function () {
        Route::post('/create', [\App\Http\Controllers\DocumentController::class, 'create']);
        Route::post('/check_sign', [\App\Http\Controllers\SignDocumentController::class, 'checkSign']);
        Route::post('/associar', [\App\Http\Controllers\SignDocumentController::class, 'associar']);
    });

    Route::group(['prefix' => 'documento'], function () {
        Route::get('/', [\App\Http\Controllers\DocumentoController::class, 'index']);
        Route::post('create/', [\App\Http\Controllers\DocumentoController::class, 'create']);
    });

    Route::group(['prefix' => 'investimento'], function () {
        Route::get('/', [\App\Http\Controllers\InvestimentoController::class, 'index']);
        Route::get('show/{id}/', [\App\Http\Controllers\InvestimentoController::class, 'show']);
        Route::post('create/', [\App\Http\Controllers\InvestimentoController::class, 'create']);
        Route::put('update/{id}', [\App\Http\Controllers\InvestimentoController::class, 'update']);
        Route::delete('destroy/{id}', [\App\Http\Controllers\InvestimentoController::class, 'destroy']);
    });

    Route::post('resetar_senha/', [\App\Http\Controllers\PasswordController::class, 'resetarSenha']);

    Route::group(['prefix' => 'endereco_usuario'], function () {
        Route::get('/', [\App\Http\Controllers\EnderecoController::class, 'index']);
        Route::get('show/{id}/', [\App\Http\Controllers\EnderecoController::class, 'show']);
        Route::post('create/', [\App\Http\Controllers\EnderecoController::class, 'create']);
        Route::put('update/{id}', [\App\Http\Controllers\EnderecoController::class, 'update']);
        Route::delete('destroy/{id}', [\App\Http\Controllers\EnderecoController::class, 'destroy']);
    });

    Route::group(['prefix' => 'investidores'], function () {
        Route::get('/{empreendimento_id}', [\App\Http\Controllers\InvestimentoController::class, 'investidores']);
    });

    Route::group(['prefix' => 'empreendimento'], function () {
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

    Route::group(['prefix' => 'usuario'], function () {
        Route::get('/meus_investimentos', [\App\Http\Controllers\UsuarioController::class, 'meusInvestimentos']);
    });

    Route::group(['prefix' => 'click_sign'], function () {
        Route::get('/assinar', [\App\Http\Controllers\AssinaturaController::class, 'criarSignatario']);
    });
});


Route::group(['prefix' => 'empreendimento'], function () {
    Route::get('/', [\App\Http\Controllers\EmpreendimentoController::class, 'index']);
    Route::get('/finalizados', [\App\Http\Controllers\EmpreendimentoController::class, 'getProjetosFinalizados']);
    Route::get('show/{id}/', [\App\Http\Controllers\FotoEmpreendimentoController::class, 'show']);
    Route::get('slug/{slug}', [\App\Http\Controllers\EmpreendimentoController::class, 'getEmpreendimentoBySlug']);
});

Route::post('register/', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('login/', [\App\Http\Controllers\AuthController::class, 'login']);

Route::group(['prefix' => 'incorporadora'], function () {
    Route::post('register/', [\App\Http\Controllers\IncorporadoraController::class, 'register']);
    Route::post('login/', [\App\Http\Controllers\IncorporadoraController::class, 'login']);
});

Route::group(['middleware' => ['auth:incorporadoraapi', 'checkuser']], function () {
    Route::group(['middleware' => ['auth:incorporadoraapi', 'checkuser']], function () {
        Route::get('/', [\App\Http\Controllers\IncorporadoraController::class, 'index']);

        Route::group(['prefix' => 'logo'], function () {
            Route::get('/', [\App\Http\Controllers\LogoIncorporadoraController::class, 'index']);
            Route::get('show/{id}/', [\App\Http\Controllers\LogoIncorporadoraController::class, 'show']);
            Route::post('create/', [\App\Http\Controllers\LogoIncorporadoraController::class, 'create']);
            Route::put('update/{id}', [\App\Http\Controllers\LogoIncorporadoraController::class, 'update']);
            Route::delete('destroy/{id}', [\App\Http\Controllers\LogoIncorporadoraController::class, 'destroy']);
        });

        Route::group(['prefix' => 'dados'], function () {
            Route::get('/', [\App\Http\Controllers\DadosIncorporadoraController::class, 'index']);
            Route::get('show/{id}/', [\App\Http\Controllers\DadosIncorporadoraController::class, 'show']);
            Route::post('/create', [\App\Http\Controllers\DadosIncorporadoraController::class, 'create']);
            Route::put('update/{id}', [\App\Http\Controllers\DadosIncorporadoraController::class, 'update']);
            Route::delete('destroy/{id}', [\App\Http\Controllers\DadosIncorporadoraController::class, 'destroy']);
        });

        Route::group(['prefix' => 'endereco'], function () {
            Route::get('/', [\App\Http\Controllers\IncorporadoraEnderecoController::class, 'index']);
            Route::get('show/{id}/', [\App\Http\Controllers\IncorporadoraEnderecoController::class, 'show']);
            Route::post('create/', [\App\Http\Controllers\IncorporadoraEnderecoController::class, 'create']);
            Route::put('update/{id}', [\App\Http\Controllers\IncorporadoraEnderecoController::class, 'update']);
            Route::delete('destroy/{id}', [\App\Http\Controllers\IncorporadoraEnderecoController::class, 'destroy']);
        });

        Route::group(['prefix' => 'socio'], function () {
            Route::get('/', [\App\Http\Controllers\SociosController::class, 'index']);
            Route::get('show/{id}/', [\App\Http\Controllers\SociosController::class, 'show']);
            Route::post('create/', [\App\Http\Controllers\SociosController::class, 'create']);
            Route::put('update/{id}', [\App\Http\Controllers\SociosController::class, 'update']);
            Route::delete('destroy/{id}', [\App\Http\Controllers\SociosController::class, 'destroy']);
        });
    });
});

Route::group(['prefix' => 'adm'], function () {
    Route::get('/', [\App\Http\Controllers\AuthAdmController::class, 'index']);
    Route::post('register/', [\App\Http\Controllers\AuthAdmController::class, 'register']);
    Route::post('login/', [\App\Http\Controllers\AuthAdmController::class, 'login']);
});

// routes ADM
Route::group(['middleware' => ['auth:admapi']], function () {
});

        Route::group(['prefix' => 'teste'], function () {
            Route::get('/', [\App\Http\Controllers\TesteController::class, 'index']);
            Route::get('show/{id}/', [\App\Http\Controllers\TesteController::class, 'show']);
            Route::post('/', [\App\Http\Controllers\TesteController::class, 'create']);
            Route::put('update/{id}', [\App\Http\Controllers\TesteController::class, 'update']);
            Route::delete('destroy/{id}', [\App\Http\Controllers\TesteController::class, 'destroy']);
        });
        