<?php

namespace App\Http\Controllers\Admin;
use App\AmmaStory;
use App\Http\Controllers\Controller;

use App\Http\Requests\AmmaStoryRequest;
use Illuminate\Http\Request;

class AmmastoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('admin.amma-story.index');
    }

    public function create() {
        return view('admin.amma-story.create');
    }

    public function store(Request $request) {

        $default_path = 'uploads/amma-story/';

        // use the custom upload function written in Controller.php
        $image = $this->upload(['file' => $request->file('image'), 'path' => $default_path]);

        $pdf = $this->upload(['file' => $request->file('pdf'), 'path' => $default_path]);

        $input = [];

        $input['intro'] = $request->input('intro');
        $input['content'] = $request->input('content');
        $input['conclusion'] = $request->input('conclusion');
        $input['video_link'] = $request->input('video_link');
        $input['image'] = $image;
        $input['pdf'] = $pdf;



        $ammaStoryContent = AmmaStory::create($input);

        $ammaStoryContent->save();

        session()->flash('message', 'Contenu de la page histoire amma créée');

        return redirect()->route('dashboard.index');
    }

    public function edit($ammaStory) {

        $ammaStory = AmmaStory::find($ammaStory);

        return view('admin.amma-story.edit', compact('ammaStory'));
    }

    public function update(Request $request, $ammaStory) {

        $ammaStory = AmmaStory::find($ammaStory);

        $default_path = 'uploads/amma-story/';

        // use the custom upload function written in Controller.php
        if($request->file('image')) {
            $image = $this->upload(['file' => $request->file('image'), 'path' => $default_path]);
        }


        if($request->file('pdf')) {
            $pdf = $this->upload(['file' => $request->file('pdf'), 'path' => $default_path]);
        }

        $input = [];

        $input['intro'] = $request->input('intro');
        $input['content'] = $request->input('content');
        $input['conclusion'] = $request->input('conclusion');
        $input['video_link'] = $request->input('video_link');

        if($request->file('image')) {
            $input['image'] = $image;
        }

        if($request->file('pdf')) {
            $input['pdf'] = $pdf;
        }

        $ammaStory->update($input);

        session()->flash('message', 'Page Histoire Amma mise à jour');

        return redirect()->route('dashboard.index');

    }

    public function destroy() {

    }
}
