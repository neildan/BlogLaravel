<?php

use App\Post;
use App\Category;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        $categories = Category::all();

        if(!empty($categories)){
            foreach($categories as $key => $category){
                for ($i=0; $i < 20; $i++) {
                    Post::create([
                        'title' => "Post $i $key",
                        'url_clean' => "post-$i-$key",
                        'content' => "Como su propio nombre indica, establece que una clase, componente o microservicio debe ser responsable de una sola cosa (el tan aclamado término “decoupled” en inglés). Si por el contrario, una clase tiene varias responsabilidades, esto implica que el cambio en una responsabilidad provocará la modificación en otra responsabilidad.",
                        'posted' => 'yes',
                        'category_id' => $category->id
                    ]);
                }
            }
        }else{
            echo "\e[31mNo hay categorías\n\e[0m";
        }
    }
}
