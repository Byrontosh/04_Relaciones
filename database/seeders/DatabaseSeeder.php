<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {

        $this->call(
            [
                LevelSeeder::class,
                GroupSeeder::class,
                UserSeeder::class,
                CategorySeeder::class,
                TagSeeder::class,
                PostSeeder::class,
                VideoSeeder::class
            ]);
    }
}
