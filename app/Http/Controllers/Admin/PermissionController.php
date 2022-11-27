<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permissions.index',compact('permissions'));
    }

    public function create()
    {
        return view('admin.permissions.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'permission'=>'required|string|min:3|max:50'
        ]);

        Permission::create(["name"=>$request->permission]);
        
        return redirect(route('admin.permissions.index'))->with('message','Your data has been created!');;
        
    }

    public function edit($id)
    {
        $permission = Permission::findOrFail($id);

        return view('admin.permissions.edit', compact('permission'));
    }

    public function update($id, Request $request)
    {
        $permission = Permission::findOrFail($id);
        $request->validate([
            'permission'=>'required|string|min:3|max:50'
        ]);
        $permission->update(['name'=>$request->permission]);
        return redirect(route('admin.permissions.index'))->with('message','Your data has been updated!');
    }

    public function destroy ($id)
    {
        $permission = Permission::findOrFail($id);
        $permission->delete();
        return redirect(route('admin.permissions.index'))->with('message','Your data has been deleted!');;
    }
}
