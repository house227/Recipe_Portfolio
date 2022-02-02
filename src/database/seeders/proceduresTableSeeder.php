<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class proceduresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('procedures')->insert([

            [
                'recipe_id' => '1',
                'procedure' => '玉ねぎを切る',
            ],

            [
                'recipe_id' => '1',
                'procedure' => '鶏肉を切る',
            ],

            [
                'recipe_id' => '1',
                'procedure' => '卵を割って溶く',
            ],
        ]);

    }
}
