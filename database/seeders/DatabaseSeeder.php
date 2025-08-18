<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Eleve;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $this->call([
            BatimentSeeder::class,
            FormationSeeder::class,
            TypeInformationSeeder::class,
        ]);

        Eleve::factory(50)->create();
    }
}
