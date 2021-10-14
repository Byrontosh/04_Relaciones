<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{

    protected $model = Location::class;


    public function definition()
    {
        return [
            'pais'=> $this->faker->country
        ];
    }
}
