<?php

namespace App\Http\Controllers\Store\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller {

    public function index() {
        return view('store.auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->first();

        if (auth()->attempt($credentials)) {
            return redirect()->route('home');
        }

        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('login');
    }
}
