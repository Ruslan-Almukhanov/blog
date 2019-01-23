<?php
namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCheckPostDataController extends Controller
{
    public function CheckPostData(Request $request )
    {
        $title = $request->input('title');
        $category = $request->input('category');
        $tag = $request->input('tag');
        $content = $request->input('content');
    }
}