<?php
namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class AdminSignInController extends Controller
{
    public function AdminSignIn()
    {
        return view('admin.admin-signIn',['title' => 'Вход']);
    }
}