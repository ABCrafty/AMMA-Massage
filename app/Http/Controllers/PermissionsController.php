<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index() {
        $permissions = Permission::count();

        return view('admin.permissions.index');
    }

    public function create() {
        $roles = Role::get();

        return view('admin.permissions.create')->with('roles', $roles);
    }

    public function store(PermissionRequest $request) {
        $input = $request->all();

        foreach($input as $key=>$value)
            if($value == null || !isset($key))
                $input[$key] ='';

        unset($input['_token']);

        $content = Permission::create($input);
        $content->save();

        return redirect()->route('dashboard.index')->with('success', 'Contenu de la page d\'accueil créé');
    }
}
