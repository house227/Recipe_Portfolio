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
        DB::table('allergys')->insert([

            //appuserモデルにhasOneのリレーションしたはず
            [
                'appusers_id' => '1',
                'allergy' => 'エビ'
            ],
        ]);
    }
}
