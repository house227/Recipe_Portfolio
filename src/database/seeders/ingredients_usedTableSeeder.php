<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ingredients_usedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //中間テーブルのseed
        DB::table('ingredients_used')->insert([

            [
                'recipe_id' => '1',
                'ingredient_id' => '1',
                'quantity' => '200g'
            ],

            [
                'recipe_id' => '2',
                'ingredient_id' => '2',
                'quantity' => '100g'
            ],

        ]);

    }
}
