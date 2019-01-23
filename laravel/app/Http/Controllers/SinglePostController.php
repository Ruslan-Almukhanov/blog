<?php
namespace App\Http\Controllers;


class SinglePostController extends Controller
{
    public function __invoke($id = 1)
    {
        return view('posts.single-post');
    }
}