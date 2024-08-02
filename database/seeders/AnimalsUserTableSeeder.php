<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AnimalsUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $animals = [
            [
                'name' => 'Rex',
                'breed' => 'Labrador',
                'type_animals_id' => 1, // Cachorro
                'age' => 3,
                'weight' => 25.5,
                'user_id' => '89de8b34-2190-4e7c-90ef-9228210a5cd7', // Substitua por um UUID existente
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Mia',
                'breed' => 'Persa',
                'type_animals_id' => 2, // Gato
                'age' => 2,
                'weight' => 4.2,
                'user_id' => 'a046c938-851c-4a7b-ae2a-6818894b97c4', // Substitua por um UUID existente
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Polly',
                'breed' => null,
                'type_animals_id' => 3, // Pássaro
                'age' => 1,
                'weight' => 0.1,
                'user_id' => '616cfb4c-52a4-4c82-8002-5b4ae5fb8a4d', // Substitua por um UUID existente
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Bugs',
                'breed' => 'Angorá',
                'type_animals_id' => 4, // Coelho
                'age' => 4,
                'weight' => 1.5,
                'user_id' => '410e8b5f-dba9-4f30-80c9-9437a2aad954', // Substitua por um UUID existente
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Nemo',
                'breed' => null,
                'type_animals_id' => 6, // Peixe
                'age' => 1,
                'weight' => 0.05,
                'user_id' => '0d9fd5f5-29b2-47d6-b903-16bf50f8ebac', // Substitua por um UUID existente
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        DB::table('animals_user')->insert($animals);
    }
}
