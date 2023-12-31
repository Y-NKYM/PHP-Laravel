<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //直接の場合
        /*
        \DB::table('books')->insert([
            [
                "title"=>'テストタイトル',
                "content"=>'テストコンテンツ',
            ],
            [
                "title"=>'テストタイトル2',
                "content"=>'テストコンテンツ2',
            ],
            [
                "title"=>'テストタイトル3',
                "content"=>'テストコンテンツ3',
            ],
        ]);
        */
        
        //Factoryを使用する場合
        Book::factory()->count(10)->create();
    }
}
