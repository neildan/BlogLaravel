<?php

namespace App\Http\Controllers\api;

use App\Category;
use App\Http\Controllers\api\ApiResponseController;

class CategoryPostController extends ApiResponseController
{
    public function show(Category $category)
    {
        $posts = $category->post()->paginate(10);
        return $this->successResponse(null, array(
            'category' => $category,
            'posts' => $posts
        ));
    }
}
