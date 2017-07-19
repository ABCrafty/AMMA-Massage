<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('admin/homepage/index');
    }

    public function store(HomepageRequest $request) {
        $input = $request->all();

        foreach($input as $key=>$value)
            if($value == null || !isset($key))
                $input[$key] ='';

        $homecontent = Homepage::create($input);

        $homecontent->save();

        return redirect()->route('home-admin.index')->with('success', 'Contenu de la page d\'accueil créé');
    }

    public function edit($homecontent) {
        $homecontent = Homepage::find($homecontent);
        return view('admin/homepage/edit', compact('homecontent'));
    }

    public function update(HomepageRequest $request, $homecontent) {
        $homecontent = Homepage::find($homecontent);

        $input = $request->all();

        foreach($input as $key=>$value)
            if($value == null || !isset($key))
                $input[$key] ='';
        $homecontent->update($input);
    }

    public function destroy() {

    }
}
