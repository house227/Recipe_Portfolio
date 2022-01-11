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
                'quantity' => '200g',
            ],

            [
                'recipes_id' => '1',
                'content' => '玉ねぎ',
                'quantity' => '1個',
            ],
        ]);
    }
}
