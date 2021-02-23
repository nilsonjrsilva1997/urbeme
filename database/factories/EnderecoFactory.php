<?php

namespace Database\Factories;

use App\Models\Endereco;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnderecoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Endereco::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cep' => '00000-000',
            ''
        ];
    }

    $table->string('cep');
    $table->integer('pais_id');
    $table->integer('user_id');
    $table->string('estado');
    $table->string('cidade');
    $table->string('rua');
    $table->string('numero');
    $table->string('complemento')->nullable();
}
