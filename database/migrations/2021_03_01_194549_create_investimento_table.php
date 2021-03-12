<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investimento', function (Blueprint $table) {
            $table->id();
            $table->float('valor');
            $table->string('codigo_indicacao')->nullable();
            $table->integer('user_id');
            $table->boolean('termos_uso')->nullable();
            $table->enum('status', ['PENDENTE', 'APROVADO', 'RECUSADO']);
            $table->integer('empreendimento_id');
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
        Schema::dropIfExists('investimento');
    }
}
