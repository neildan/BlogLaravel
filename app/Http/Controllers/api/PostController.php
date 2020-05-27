<?php

namespace App\Http\Controllers\api;

use App\Post;
use App\Http\Controllers\api\ApiResponseController;

class PostController extends ApiResponseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::
            select(
                'posts.id',
                'posts.title',
                'posts.content',
                'posts.updated_at',
                'imgs.image',
                'categories.title as category',
            )->
            join('categories', 'posts.category_id', 'categories.id')->
            join('post_images as imgs','imgs.post_id', '=', 'posts.id')->
            orderBy('posts.updated_at', 'desc')->paginate(10);

        return $this->successResponse(null, $posts);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post->image;
        $post->category;
        return $this->successResponse(null, $post);
    }
}
