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
                'recipe_id' => '1',
                'content' => '鶏肉',
            ],

            [
                'recipe_id' => '1',
                'content' => '玉ねぎ',
            ],

            [
                'recipe_id' => '1',
                'content' => '卵',
            ],
            [
                'recipe_id' => '2',
                'content' => 'トマト',
            ],
            [
                'recipe_id' => '2',
                'content' => 'チーズ',
            ],
            [
                'recipe_id' => '2',
                'content' => 'ベーコン',
            ],
            [
                'recipe_id' => '3',
                'content' => '鶏肉',
            ],
        ]);
    }
}
