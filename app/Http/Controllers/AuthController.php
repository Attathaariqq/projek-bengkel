<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function get() 
    {
        return view("auth.login");
    }

    public function auth(Request $req)
    {

    }

    public function registerView()
    {
        return view("auth.register");
    }

    public function register(Request $req, User $user)
    {

    }
}
