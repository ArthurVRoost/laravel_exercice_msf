<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeInformation;

class TypeInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         TypeInformation::insert([
            ['nom' => 'Coding School 35'],
            ['nom' => 'Coding School 34'],
            ['nom' => 'Coding School 33'],
            ['nom' => 'Coding School 32'],
            ['nom' => 'Coding School 31'],
            ['nom' => 'Marketing Lab 1'],
            ['nom' => 'Marketing Lab 2'],
            ['nom' => 'Marketing Lab 3'],
            ['nom' => 'Marketing Lab 4'],
            ['nom' => 'Marketing Lab 5'],
        ]);
    }
}
