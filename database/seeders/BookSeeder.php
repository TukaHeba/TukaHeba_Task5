<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book\Book;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Agile',
            'author' => 'author 1',
            'publisher' => 'publisher 1',
            'price' => '20',
            'main_classification_id' => '1',
            'sub_classification_id' => '',
            'favorite_id' => '',
            'rate_id' => '',
            'review_id' => '',

        ]);
        Book::create([
            'title' => 'Introduction to Networks',
            'author' => 'author 2',
            'publisher' => 'publisher 2',
            'price' => '20',
            'main_classification_id' => '1',
            'sub_classification_id' => '',
            'favorite_id' => '',
            'rate_id' => '',
            'review_id' => '',
        ]);
        Book::create([
            'title' => 'Asp.Net',
            'author' => 'author 3',
            'publisher' => 'publisher 3',
            'price' => '20',
            'main_classification_id' => '1',
            'sub_classification_id' => '',
            'favorite_id' => '',
            'rate_id' => '',
            'review_id' => '',
        ]);
        Book::create([
            'title' => 'tit',
            'author' => 'jj',
            'publisher' => 'kk',
            'price' => '20',
            'main_classification_id' => '1',
            'sub_classification_id' => '',
            'favorite_id' => '',
            'rate_id' => '',
            'review_id' => '',
        ]);
        Book::create([
            'title' => 'Algebra 1',
            'author' => 'author 4',
            'publisher' => 'publisher 4',
            'price' => '20',
            'main_classification_id' => '2',
            'sub_classification_id' => '',
            'favorite_id' => '',
            'rate_id' => '',
            'review_id' => '',
        ]);
        Book::create([
            'title' => 'Anatomy 1',
            'author' => 'jj',
            'publisher' => 'kk',
            'price' => '20',
            'main_classification_id' => '3',
            'sub_classification_id' => '',
            'favorite_id' => '',
            'rate_id' => '',
            'review_id' => '',
        ]);
    }
}
