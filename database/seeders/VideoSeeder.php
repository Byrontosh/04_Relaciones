<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Image;
use App\Models\Video;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{

    public function run()
    {
        Video::factory()->count(10)->create();
        $posts = Video::all();


       $posts->each(function ($post) {
           $post->image()->save(Image::factory()->make(['url' => "https://picsum.photos/id/$post->id/150/150"]));
       });

       $posts->each(function ($post) {

        $tags = rand(1,5);
        for($i=1 ; $i<=$tags ; $i++)
        {
            $post->tags()->attach($i);
        }
       });

       $posts->each(function ($post) {
           
           $number_comments = rand(1,2);
           
           for($i=0 ; $i<$number_comments ; $i++)
           {
               $post -> comments()->save(Comment::factory()->make());
           }
           
       });
    }

}
