<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Location;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {
        // Devuelve una instancia con el método make y no lo inserta en la base de datos como lo 
        // realiza el método create
        //dd(User::factory()->count(1)->make());

        User::factory()->count(5)->create();
        $users = User::all();


        $users->each(function ($user) {
            $user->profile()->save(Profile::factory()->make());
        });


        $profiles = Profile::all();
        $profiles->each(function ($profile) {

            $profile->location()->save(Location::factory()->make());
        });


        $users->each(function ($user) {
            $user->image()->save(Image::factory()->make(['url' => "https://picsum.photos/id/$user->id/100/100"]));
        });


        $users->each(function ($user) {
            $group = rand(1, 3);
            for ($i = 1; $i <= $group; $i++) {

                $user->groups()->attach($i);
            }
        });
    }

}
