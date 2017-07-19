<?php

namespace App\Http\Controllers\AmmaAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function create() {
        return view('ammaAuth.login');
    }

    public function store() {

    }

    public function destroy() {
        auth()->logout();
    }
}
