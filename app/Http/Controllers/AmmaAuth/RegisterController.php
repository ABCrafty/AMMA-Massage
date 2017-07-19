<?php

namespace App\Http\Controllers\AmmaAuth;

use App\Http\Requests\UsersRequest;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create() {
        return view('ammaAuth.register');
    }

    public function store(UsersRequest $request) {
        $input = $request->all();

        foreach($input as $key => $value)
            if($value == null || !isset($key))
                $input[$key] ='';

        $role = Role::selectRaw('guest')->get();

        if(!$role) {
            $role = Role::create([
                'name' => 'guest',
                'display_name' => 'Invité',
                'description' => 'Role basique sur le site',
            ]);
        }

        $user = User::create([
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => $input['password']
        ]);

        $user->attachRole($role);

        auth()->login($user);

        return redirect()->route('home');

    }
}
