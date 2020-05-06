<?php

namespace App\Http\Controllers\api;

use App\Category;
use App\Http\Controllers\api\ApiResponseController;

class CategoryController extends ApiResponseController
{
    public function all()
    {
        return $this->successResponse(null, Category::all());
    }

    public function index()
    {
        return $this->successResponse(null, Category::paginate(10));
    }
}
