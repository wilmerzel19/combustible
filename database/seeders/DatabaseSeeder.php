<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\user::factory()->create([

             'name'=>'Wilmer Zelaya',
             'email'=> 'wilmerzel20@gmail.com',
             'password'=>bcrypt('12345678'),

        ]

        );



        \App\Models\persona::factory(1000)->create();
        \App\Models\tarjeta::factory(1000)->create();
        \App\Models\unidad::factory(1000)->create();
        \App\Models\personaunidad::factory(1000)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
