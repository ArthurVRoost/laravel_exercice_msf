<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Formation;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Formation::insert([
            ['nom' => 'Web-Dev-Front', 'description' => 'Developpent Front-End'],
            ['nom' => 'Web-Dev-Back', 'description' => 'Developpent Back-End'],
            ['nom' => 'Web-Dev-FullStack', 'description' => 'Developpent Fullstack'],
            ['nom' => 'Marketing Pub', 'description' => 'Formation marketing spécialisé en pub de tout genre'],
            ['nom' => 'Marketing Pub-Longue', 'description' => 'Formation marketing spécialisé pub longue'],
            ['nom' => 'Marketing Pub-Courte', 'description' => 'Formation marketing spécialisé pub courte'],
        ]);
    }
}
