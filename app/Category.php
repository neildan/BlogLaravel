<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'url_clean'];

    /**
     * Obtener los posts de una categoría
     *
     * @return array
     * @author Daniel Valencia <2020-05-05>
     */
    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
