<?php

namespace Database\Factories;

use App\Models\Treinadores;
use Illuminate\Database\Eloquent\Factories\Factory;

class TreinadoresFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Treinadores::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nome' => $this->faker->word,
            'cidade-natal' => $this->faker->word,
            'ginasio' => $this -> faker->word,
        ];
    }
}
