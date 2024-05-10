<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book\SubClassification;


class SubClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubClassification::create([
            'name' => 'Software Engineering',
            'main_classification_id' => '1'
        ]);
        SubClassification::create([
            'name' => 'Networks',
            'main_classification_id' => '1'
        ]);
        SubClassification::create([
            'name' => 'Web',
            'main_classification_id' => '1'
        ]);
        SubClassification::create([
            'name' => 'Algebra',
            'main_classification_id' => '2'
        ]);
        SubClassification::create([
            'name' => 'Anatomy',
            'main_classification_id' => '3'
        ]);
        SubClassification::create([
            'name' => 'Chemistry',
            'main_classification_id' => '4'
        ]);
        SubClassification::create([
            'name' => 'Italy',
            'main_classification_id' => '5'
        ]);
        SubClassification::create([
            'name' => 'Arabic',
            'main_classification_id' => '6'
        ]);
    }
}
