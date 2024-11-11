<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pokemon::create(['name' => 'Pikachu', 'type' => 'Elettro']);
        Pokemon::create(['name' => 'Charmander', 'type' => 'Fuoco']);
        Pokemon::create(['name' => 'Bulbasaur', 'type' => 'Erba']);
    }
}