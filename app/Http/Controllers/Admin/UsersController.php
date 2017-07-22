<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use function foo\func;
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

        session()->flash('message','Utilisateur mis à jour');
        return redirect()->route('users.index');
    }

    public function destroy($user) {
//        if(auth()->user()->id == $id) {
//            session()->flash('warning', 'On ne peut pas supprimer l\'utilisateur courant');
//            return redirect()->back();
//        }

        $user = User::find($user);

        $user->delete();

        session()->flash('message', 'utilisateur supprimé');

        return redirect()->back();
    }

    public function show() {

    }

    public function ajaxListing() {
        $users = User::select(['id', 'username', 'email']);
            return Datatables::of($users)
                ->addColumn('action', function ($user) {
                    return '<a class="data-action" href="'.route('users.edit', $user->id).'">
                            <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                            <a class="data-action" href="'.route('users.destroy', $user->id).'">
                            <i class="fa fa-times fa-2x" aria-hidden="true"></i></a>';
                })
                ->make(true);
    }
}
