<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{

    protected $model = Video::class;


    public function definition()
    {
        return [
            
            'nombre'=> $this->faker->name,
            'category_id'=> rand(1,4),
            'user_id'=> rand(1,5)
        ];
    }
}
