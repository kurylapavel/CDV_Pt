<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')
        ->insert([
            'name'=>'harry potter and the philosopher\'s stone',
            'year'=>1997,
            'publication_place'=>'Bloomsbury (UK)',
            'pages'=>223,
            'price'=>100.99
        ]);
        
        DB::table('books')->insert([
            'name'=>'Metro 2033',
            'year'=>2005,
            'publication_place'=>'Eksmo',
            'pages'=>458,
            'price'=>999.99
        ]);
    }
}
