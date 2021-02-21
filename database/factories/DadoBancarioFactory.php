<?php

namespace Database\Factories;

use App\Models\DadoBancario;
use Illuminate\Database\Eloquent\Factories\Factory;

class DadoBancarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DadoBancario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'agencia' => \Str::random(5),
            'conta' => \Str::random(4),
            'banco_id' => \App\Models\Banco::factory()->create()['id'],
            'user_id' => \App\Models\User::factory()->create()['id'],
        ];
    }
}
