<?php

namespace Database\Seeders;

use App\Models\Appuser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class appusersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ログイン用田中太郎
        $param = [
            'name' => '田中太郎',
            'mail' => 'tanaka@taro',
            'pass' => '123456',
            'introduction' => '田中太郎です。',
            'photo' => 'https://via.placeholder.com/640x480.png/003377?text=facilis',
        ];
        DB::table('appusers')->insert($param);
        
        //fakerの定義
        appuser::factory()->count(3)->create();

    }
}
