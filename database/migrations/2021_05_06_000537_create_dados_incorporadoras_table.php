<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDadosIncorporadorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_incorporadoras', function (Blueprint $table) {
            $table->id();
            $table->string('url_live');
            $table->string('url_site');
            $table->string('cpf');
            $table->text('informacoes');
            $table->integer('incorporadora_id');
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
        Schema::dropIfExists('dados_incorporadoras');
    }
}
