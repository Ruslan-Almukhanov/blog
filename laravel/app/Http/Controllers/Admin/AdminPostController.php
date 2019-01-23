<?php
namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class AdminPostController extends Controller
{
    public function CreatePost()
    {
        return view('admin.admin-post',['title' => 'Новая статья']);
    }
}