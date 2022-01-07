<?php

namespace Database\Seeders;

use App\Models\appuser;
use Illuminate\Database\Seeder;

class appusersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        appuser::factory()->count(3)->create();
    }
}
