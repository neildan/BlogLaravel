<?php

namespace App\Http\Controllers\api;

use App\Post;
use App\Http\Controllers\api\ApiResponseController;

class UrlCleanController extends ApiResponseController
{
    /**
     * Obtener el post mediante una url limpia
     *
     * @param string $url_clean
     * @return string
     * @author Daniel Valencia <2020-05-05>
     */
    public function post(String $url_clean)
    {
        $post = Post::where('url_clean', $url_clean)->firstOrFail();
        $post->image;
        $post->category;
        return $this->successResponse(null, $post);
    }
}
