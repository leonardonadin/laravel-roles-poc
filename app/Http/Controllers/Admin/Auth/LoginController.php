<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller {

    public function index() {
        return view('admin.auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->first();

        if (!$user || (!$user->hasRole('admin') && !$user->hasRole('super-admin'))) {
            return redirect()->back()->withInput()->withErrors(['email' => 'Access denied']);
        }

        if (auth()->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('admin.login');
    }
}
