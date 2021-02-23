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
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
