<?php

namespace App\Http\Controllers\Store\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller {

    public function index() {
        return view('store.auth.login');
    }

}
