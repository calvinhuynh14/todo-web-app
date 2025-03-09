<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    // Display register page
    public function displayRegister()
    {
        return view('register');
    }

    // Display login page
    public function displayLogin()
    {
        return view('login');
    }

    // Register user
    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return view('/login');
    }

    public function authenticate(Request $request) : RedirectResponse
    {

        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->intended('manage');
        };

        return back()->withErrors([
            'email' => 'Invalid credentials',
        ])->onlyInput('email');
    }
}
