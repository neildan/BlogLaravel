<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

class WebController extends Controller
{
    /**
     * Devolver la vista index
     *
     * @return view
     * @author Daniel Valencia <2020-05-05>
     */
    public function index()
    {
        return view("web.index");
    }

    public function detail()
    {
        return view("web.index");
    }

    public function post_category()
    {
        return view("web.index");
    }
}
