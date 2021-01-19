<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosIncorporadoraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos_incorporadora', function (Blueprint $table) {
            $table->id();
            $table->string("cep");
            $table->string("rua");
            $table->string("bairro");
            $table->string("cidade");
            $table->string("numero");
            $table->string("estado");
            $table->integer("incorporadora_id");
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
        Schema::dropIfExists('enderecos_incorporadora');
    }
}
