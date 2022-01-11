<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class recipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([

            //appuserモデルにhasOneのリレーションしたはず
            [
                'appusers_id' => '1',
                'title' => '親子丼',
                'recipe_type' => '和食',
                'photo' => 'https://park.ajinomoto.co.jp/wp-content/uploads/2018/03/708200.jpeg'
            ],
        ]);
    }
}
