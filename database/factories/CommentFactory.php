<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{

    
    protected $model = Comment::class;


    
    public function definition()
    {
        return [
            'detalle'=> $this->faker->sentence,
            'user_id'=> rand(1,5)
        ];
    }
}
