<?php

namespace App\Http\Controllers\api;

use App\Post;
use App\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\api\ApiResponseController;

class CategoryPostController extends ApiResponseController
{
    public function show(Category $category)
    {
        $posts = Post::
            select(
                'posts.id',
                'posts.title',
                'posts.content',
                'imgs.image'
            )->
            leftJoin('post_images as imgs','imgs.post_id', '=', 'posts.id')->
            where('category_id', $category->id)->
            orderBy('posts.updated_at', 'desc')->
            paginate(10);

        return $this->successResponse(null, array(
            'category' => $category,
            'posts' => $posts
        ));
    }
}
