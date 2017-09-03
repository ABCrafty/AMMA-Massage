<?php

namespace App\Http\Controllers;

use App\Background;
use App\Homepage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homepage = Homepage::first();
        $background = Background::first();
        return view('homepage/index', compact('homepage', 'background'));
    }
}
