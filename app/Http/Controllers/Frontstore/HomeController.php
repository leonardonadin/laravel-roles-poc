<?php

namespace App\Http\Controllers\Frontstore;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller {

    public function index() {
        return view('frontstore.home');
    }

}
