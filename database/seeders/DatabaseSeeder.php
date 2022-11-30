<?php

namespace Database\Seeders;
use App\Models\Book;
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
            'id' => 1,
            'title' => 'Las mil y una noches',
            'author' => 'Anónimo',
            'pages' => 1327,
            'ISBN' => '9780706411157',
            'front' => 'lasmilyunanoche.jpg',
            'onStock' => true
        ]);

        Book::create([
            'id' => 2,
            'title' => '1984',
            'author' => 'Anónimo',
            'pages' => 1327,
            'ISBN' => '9789962904946',
            'front' => '1984.jpg',
            'onStock' => true
        ]);

        Book::create([
            'id' => 3,
            'title' => 'Usted puede sanar su vida',
            'author' => 'Louise L. Hay',
            'pages' => 244,
            'ISBN' => '9788496829015',
            'front' => 'ustedpuedesanarsuvida.jpg',
            'onStock' => true
        ]);

    }
}
