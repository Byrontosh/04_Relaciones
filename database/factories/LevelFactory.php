<?php

namespace Database\Factories;

use App\Models\Level;
use Illuminate\Database\Eloquent\Factories\Factory;

class LevelFactory extends Factory
{

    protected $model = Level::class;

 
    public function definition()
    {
        return [

            
            // No se requiere ya que esto se ha configurado en el seeder
        ];
    }
}
