<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sobre_nome');
            $table->string('email')->unique();
            $table->integer('pais_nascimento_id')->nullable();
            $table->string('cidade_nascimento')->nullable();
            $table->string('estado_nascimento')->nullable();
            $table->float('patrimonio_total')->nullable();
            $table->float('renda_mensal')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->integer('estado_civil_id')->nullable();
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->string('profissao')->nullable();
            $table->string('empresa')->nullable();
            $table->string('celular')->nullable();
            $table->string('telefone')->nullable();
            $table->enum('sexo', ['MASCULINO', 'FEMININO', 'OUTRO'])->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('foto')->nullable();
            $table->boolean('aparecer_lista')->nullable();
            $table->boolean('pessoa_publicamente_exposta')->nullable();
            $table->integer('pais_nascimento_id')->nullable();
            $table->rememberToken();
            $table->timestamps();


            /*
                - Pais nascimento
                - Estado nascimento
                - Cidade nascimento
                - Patrimonio Total
                - Renda mensal
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
