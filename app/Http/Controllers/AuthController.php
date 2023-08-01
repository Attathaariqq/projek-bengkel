<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function get()
    {
        return view("auth.login");
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function userView(User $user)
    {
        $users = $user->get();
        return view("users.user", ["users" => $users]);
    }

    public function addUserView()
    {
        return view("users.user_add");
    }

    public function add(Request $request, User $user)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user->create($data);
        return redirect()->route("auth.user");
    }

    public function editUserView(User $user)
    {
        return view("users.user_edit", ['user' => $user]);
    }

    public function edit(User $user, Request $request)
    {
        $data = $request->all();

        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }
        $user->update($data);
        return redirect()->route("auth.user");
    }

    public function delete(User $user)
    {
        $user->delete();
        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route("auth.get");
    }
}
