<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;

class UsersController extends Controller
{

    public function index() {
        $users = User::latest()->count();

        return view('admin.users.index', compact('users'));
    }

    public function create() {

        return view('admin.users.create');
    }

    public function edit($id) {
        $user = User::find($id);

        return view('admin.users.edit', compact('user'));
    }

    public function update($user, Request $request) {

        $user = User::find($user);
        $default_path = 'uploads/avatars'.$request->input('username');

        if(!isset($user->password)) {
            $this->validate($request, [
                'password' => 'required'
            ]);
        }

        if(!isset($user->email)) {
            $this->validate($request, [
                'email' => 'required|email'
            ]);
        }

        $avatar = $this->upload(['file' => $request->file('avatar'), 'path' => $default_path]);

        $input = [];

        $input['username'] = $request->input('username');
        $input['email'] = $request->input('email');
        $input['description'] = $request->input('description');
        $input['avatar'] = serialize($avatar);

        $user->update($input);

        return redirect()->route('users.index');
    }

    public function destroy($id) {
        if(Auth::user()->id == $id) {
            session()->flash('On ne peut pas supprimer l\'utilisateur courant');
            return redirect()->back();
        }

        if(User::findOrFail($id)->delete()) {
            session()->flash('success', 'user supprimé');
        }
        else {
            session()->flash('user pas supprimé');
        }

        return redirect()->back();
    }

    public function ajaxListing() {
        $users = User::select(['id', 'username', 'email']);
            return Datatables::of($users)->make(true);
    }
}
