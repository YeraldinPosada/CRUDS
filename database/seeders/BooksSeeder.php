<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            ['name' => 'Test', 'price' => 123],
            ['name' => 'Tests', 'price' => 1232],
            ['name' => 'Testa', 'price' => 1213],
            ['name' => 'Testq', 'price' => 2323],
        ];
        
        foreach ($books as $book) {
            Book::create([
                'name' => $book['name'],
                'price' => $book['price']
            ]
            );
        }
    }
}
