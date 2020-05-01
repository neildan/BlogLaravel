<?php

namespace App\Http\Controllers\dashboard;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\uploadImagePost;
use App\PostImage;

class PostFileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'rol.admin']);
    }

    /**
     * Subir imagen de un post
     *
     * @param uploadImagePost $request
     * @param Post $post
     * @return view
     * @author Daniel Valencia <2020-04-29>
     */
    public function uploadImage(uploadImagePost $request, Post $post)
    {
        $request->validated();

        $fillname = time() . ".". $request->image->extension();

        $request->image->move(public_path('images'), $fillname);

        PostImage::create([
            'post_id' => $post->id,
            'image' => $fillname
        ]);

        return back()->with('status', 'Se cargo la imagen correctamente');
    }
}
