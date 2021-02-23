<?php

namespace Database\Factories;

use App\Models\Paises;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaisesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paises::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => \Str::random(2),
            'name' => $this->faker->name,
        ];
    }
}
