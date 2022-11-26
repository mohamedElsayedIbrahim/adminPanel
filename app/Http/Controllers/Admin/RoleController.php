<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index',compact('roles'));
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'role'=>'required|string|min:3|max:50'
        ]);

        Role::create(["name"=>$request->role]);

        return redirect(route('admin.roles.index'));
        
    }
}
