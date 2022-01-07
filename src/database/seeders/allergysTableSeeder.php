<?php

namespace Database\Seeders;

use App\Models\allergy;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class allergysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            //'appusers_id'のリレーションの確認？
        ];
        DB::table('allergys')->insert($param);
    }
}
