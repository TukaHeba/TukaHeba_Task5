<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book\MainClassification;

class MainClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MainClassification::create([
            'name' => 'Information Technology'
        ]);
        MainClassification::create([
            'name' => 'Mathmatics'
        ]);
        MainClassification::create([
            'name' => 'Medicine'
        ]);
        MainClassification::create([
            'name' => 'Science'
        ]);
        MainClassification::create([
            'name' => 'Languages'
        ]);
        MainClassification::create([
            'name' => 'Literature'
        ]);
    }
}
