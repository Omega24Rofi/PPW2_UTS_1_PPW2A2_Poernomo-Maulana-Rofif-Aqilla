<?php

namespace Database\Seeders;

use App\Models\mu_player_model;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;

class mu_player_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for($i=0; $i < 10; $i++) {
            mu_player_model::create([
                'nama_pemain'=>fake()->name(2),
                'no_punggung'=>fake()->numberBetween(1, 99),
                'posisi'=>fake()->word()
            ]);
           }
    }
}
