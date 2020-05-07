<?php

use App\Post;
use App\PostImage;
use Illuminate\Database\Seeder;

class PostImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostImage::truncate();

        $posts = Post::all();

        if(!empty($posts)){
            foreach($posts as $post){
                PostImage::create([
                    'image' => "1588810859.jpeg",
                    'post_id' => $post->id,
                ]);
            }
        }else{
            echo "\e[31mNo hay posts\n\e[0m";
        }
    }
}
