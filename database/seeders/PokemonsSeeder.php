<?php

namespace Database\Seeders;

use \App\Models\User;
use \App\Models\Pokemons;
use Illuminate\Database\Seeder;

class PokemonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = User::all();
        foreach($users as $user) {
            # code...
            Pokemons::factory(10)->create([
                'user_id' => $user->id
            ]);
        }
    }
}
