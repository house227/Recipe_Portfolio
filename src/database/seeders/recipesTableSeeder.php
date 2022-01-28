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

            [
                'appuser_id' => '1',
                'title' => '親子丼',
                'recipe_type' => '和食',
                'photo' => 'https://park.ajinomoto.co.jp/wp-content/uploads/2018/03/708200.jpeg'
            ],
            [
                'appuser_id' => '2',
                'title' => 'pizza',
                'recipe_type' => 'イタリアン',
                'photo' => 'https://partenope.jp/img/970x647/17.jpg'
            ],
            [
                'appuser_id' => '2',
                'title' => '唐揚げ',
                'recipe_type' => '中華',
                'photo' => 'https://www.kubara.co.jp/files/bgeditor/img/374__6Jya5YWI5oGV57i65Luj772Z.jpg'
            ],
        ]);
    }
}
