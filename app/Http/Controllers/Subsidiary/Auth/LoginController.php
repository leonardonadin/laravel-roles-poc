<?php

namespace App\Http\Controllers\Subsidiary\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller {

    public function index() {
        return view('subsidiary.auth.login');
    }

    public function login(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user || (!$user->hasRole('manager') && !$user->hasRole('seller'))) {
            return back()->with('status', 'Invalid login details');
        }

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid login details');
        }

        return redirect()->route('subsidiary.dashboard');
    }

    public function logout() {
        auth()->logout();

        return redirect()->route('subsidiary.login');
    }

}
