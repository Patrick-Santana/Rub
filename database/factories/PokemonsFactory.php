<?php

namespace Database\Factories;

use App\Models\Pokemons;
use Illuminate\Database\Eloquent\Factories\Factory;

class PokemonsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pokemons::class;

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
            'tipo' => $this->faker->word,
            'iv'   => $this->faker->numberBetween(0,100),
        ];
    }
}
