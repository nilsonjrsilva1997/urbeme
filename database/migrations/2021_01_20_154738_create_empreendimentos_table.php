<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpreendimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empreendimentos', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('plano_fundo')->nullable();
            $table->string('nome_projeto');
            $table->integer('endereco_id');
            $table->integer('incorporadora_id');
            $table->string('url_video');
            $table->longText('descricao_projeto');
            $table->float('rentabilidade_anual_min');
            $table->float('rentabilidade_anual_max');
            $table->float('rentabilidade_minima_cdi');
            $table->date('vencimento_titulo');
            $table->integer('tempo_projeto');
            $table->longText('informacoes_empreendimento');
            $table->longText('informacoes_oferta');
            $table->longText('informacoes_prestacao_contas');
            $table->longText('alerta_riscos');
            $table->longText('caracteristica_oferta_tributacao_aplicavel');
            $table->longText('estudo_viabilidade_economica');
            $table->longText('outras_informacoes');
            $table->longText('pacote_documentos_juridicos');
            $table->float('valor_total_capitacao');
            $table->date('final_capitacao');
            $table->float('andamento_obras');
            $table->float('unidades_vendidas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empreendimentos');
    }
}
