<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Batiment;

class BatimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Batiment::insert([
            'nom' => 'Molengeek',
            'description' => "Batiment principal de l'organisme Molengeek."
        ]);
    }
}
