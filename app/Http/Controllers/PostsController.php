<?php

namespace App\Http\Controllers;

use App\Background;
use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
    }

    public function index() {
        $background = Background::first();
        $posts = Posts::latest()->paginate(10);
        return view('blog.index', compact('posts', 'background'));
    }

    public function show($id) {
        $post = Posts::find($id);

        $posts = Posts::latest()->limit(3)->get();

        return view('blog.show', compact('post', 'posts'));
    }
}
