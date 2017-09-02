<?php

namespace App\Http\Controllers;

use App\AmmaStory;
use Illuminate\Http\Request;

class AmmastoryController extends Controller
{
    public function index() {

        $story = AmmaStory::first();

        return view('amma-story.index', compact('story'));
    }
}
