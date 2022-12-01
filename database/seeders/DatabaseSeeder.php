<?php

namespace Database\Seeders;
use App\Models\Book;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'id' => 9223,
            'title' => 'Las mil y una noches',
            'author' => 'Anónimo',
            'pages' => 1327,
            'ISBN' => '9780706411157',
            'front' => 'uploads/lasmilyunanoches.jpg',
            'on_stock' => true
        ]);

        Book::create([
            'id' => 9224,
            'title' => '1984',
            'author' => 'Anónimo',
            'pages' => 1327,
            'ISBN' => '9789962904946',
            'front' => 'uploads/1984.jpg',
            'on_stock' => true
        ]);

        Book::create([
            'id' => 9225,
            'title' => 'Usted puede sanar su vida',
            'author' => 'Louise L. Hay',
            'pages' => 244,
            'ISBN' => '9788496829015',
            'front' => 'uploads/ustedpuedesanarsuvida.jpg',
            'on_stock' => true
        ]);


    }
}
