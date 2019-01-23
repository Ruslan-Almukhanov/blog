<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminRegistrationController extends Controller
{
    public function AdminRegistration(Request $request)
    {
        return view('admin.admin-registration',['title' => 'Регистрация']);
    }

    public function AdminCheckData(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $passwordConfirmation = $request->input('password_confirmation');
        if($name != null) {
            var_dump($name);
            exit();
        }

        return view('admin.admin-registration',['title' => 'Регистрация']);
    }
}