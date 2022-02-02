<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ingredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([

            [
                'recipes_id' => '1',
                'content' => '鶏肉',
            ],

            [
                'recipes_id' => '1',
                'content' => '玉ねぎ',
            ],

            [
                'recipes_id' => '1',
                'content' => '卵',
            ],
            [
                'recipes_id' => '2',
                'content' => 'トマト',
            ],
            [
                'recipes_id' => '2',
                'content' => 'チーズ',
            ],
            [
                'recipes_id' => '2',
                'content' => 'ベーコン',
            ],
            [
                'recipes_id' => '3',
                'content' => '鶏肉',
            ],
        ]);
    }
}
