<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(appusersTableSeeder::class);
        $this->call(allergysTableSeeder::class);
        $this->call(recipesTableSeeder::class);
        $this->call(ingredientsTableSeeder::class);
        $this->call(ingredients_usedTableSeeder::class);
        $this->call(proceduresTableSeeder::class);
    }
}
