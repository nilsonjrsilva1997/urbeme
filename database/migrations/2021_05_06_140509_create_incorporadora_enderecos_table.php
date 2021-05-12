<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateIncorporadoraEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incorporadora_enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('cep');
            $table->string('bairro');
            $table->integer('numero');
            $table->string('rua');
            $table->string('cidade');
            $table->string('estado');
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
        Schema::dropIfExists('incorporadora_enderecos');
    }
}
