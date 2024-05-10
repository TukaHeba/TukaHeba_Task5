<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Book\Book;
use App\Models\Book\MainClassification;
use App\Models\Book\SubClassification;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // User::truncate();
        // MainClassification::truncate();
        // SubClassification::truncate();
        // Book::truncate();

        $this->call([
            UserSeeder::class,
            MainClassificationSeeder::class,
            SubClassificationSeeder::class,
            BookSeeder::class,

        ]);
    }
}
