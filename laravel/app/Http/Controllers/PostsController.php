<?php

namespace App\Http\Controllers;

class PostsController extends Controller
{
    public function __invoke()
    {
        return view('posts.posts',['title' => 'Посты']);
    }
}