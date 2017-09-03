<?php

namespace App\Http\Controllers\Admin;

use App\Background;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackgroundController extends Controller
{
    public function create() {
        return view('admin.background.create');
    }

    public function store(Request $request) {

        $default_path = 'uploads/backgrounds';

        // use the custom upload function written in Controller.php
        $homepageBackground = $this->upload(['file' => $request->file('homepage'), 'path' => $default_path]);

        $blogBackground = $this->upload(['file' => $request->file('blog'), 'path' => $default_path]);

        $input = [];

        $input['homepage'] = $homepageBackground;
        $input['blog'] = $blogBackground;


        $storeBackground = Background::create($input);
        $storeBackground->save($input);

        session()->flash('message','Backgrounds mis à jour');
        return redirect()->route('dashboard.index');
    }

    public function edit($id) {
        $background = Background::findOrFail($id);
        return view('admin.background.edit', compact('background'));
    }

    public function update($background, Request $request) {

        $background = Background::find($background);

        $default_path = 'uploads/backgrounds';

        // use the custom upload function written in Controller.php
        if($request->file('homepage')) {
            $homepageBackground = $this->upload(['file' => $request->file('homepage'), 'path' => $default_path]);
        }


        if($request->file('blog')) {
            $blogBackground = $this->upload(['file' => $request->file('blog'), 'path' => $default_path]);
        }


        $input = [];

        if($request->file('homepage')) {
            $input['homepage'] = $homepageBackground;
        }

        if($request->file('blog')) {
            $input['blog'] = $blogBackground;
        }

        $background->update($input);

        session()->flash('message','Backgrounds mis à jour');
        return redirect()->route('dashboard.index');
    }
}
