<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

    protected $model = Post::class;


    public function definition()
    {
        return [
            
            'nombre'=> $this->faker->sentence,
            'category_id'=> rand(1,4),
            'user_id'=> rand(1,5)
        
        ];
    }
}
