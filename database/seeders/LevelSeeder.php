<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{

    public function run()
    {

        $levels = ['oro', 'plata', 'bronce'];

        foreach ($levels as $level) {

            Level::create(['nombre' => $level]);
        }
    }
}
