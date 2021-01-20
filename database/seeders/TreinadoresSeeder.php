<?php

namespace Database\Seeders;
use \App\Models\Treinadores;
use \App\Models\User;
use Illuminate\Database\Seeder;

class TreinadoresSeeder extends Seeder
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

        foreach ($users as $user) {
            # code...
            Treinadores::factory(1)->create([
                'user_id' => $user->id
            ]);
        }
    }
}
