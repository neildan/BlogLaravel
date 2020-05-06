<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        for ($i=0; $i < 20; $i++) {
            Category::create([
                'title' => "Category $i",
                'url_clean' => "category-$i",
            ]);
        }
    }
}
