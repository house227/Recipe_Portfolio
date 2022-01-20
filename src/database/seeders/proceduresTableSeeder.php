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
                'recipes_id' => '1',
                'procedure' => '玉ねぎを切る',
            ],

            [
                'recipes_id' => '1',
                'procedure' => '鶏肉を切る',
            ],

            [
                'recipes_id' => '1',
                'procedure' => '卵を割って溶く',
            ],
        ]);

    }
}
