<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::whereNotIn('name', ['super-admin'])->get();
        
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

        return redirect(route('admin.roles.index'))->with('message','Your data has been created!');;
        
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);

        return view('admin.roles.edit', compact('role'));
    }

    public function update($id, Request $request)
    {
        $role = Role::findOrFail($id);
        $request->validate([
            'role'=>'required|string|min:3|max:50'
        ]);
        $role->update(['name'=>$request->role]);
        return redirect(route('admin.roles.index'))->with('message','Your data has been updated!');
    }

    public function destroy ($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect(route('admin.permissions.index'))->with('message','Your data has been deleted!');;
    }
}
