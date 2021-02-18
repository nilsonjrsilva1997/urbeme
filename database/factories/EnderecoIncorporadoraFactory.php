<?php

namespace Database\Factories;

use App\Models\EnderecoIncorporadora;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnderecoIncorporadoraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EnderecoIncorporadora::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cep' => '11111-555',
            'rua' => $this->faker->name,
            'bairro' => $this->faker->name,
            'cidade' => $this->faker->name,
            'estado' => $this->faker->name,
            'numero' => (string) $this->faker->randomDigit
        ];
    }
}
