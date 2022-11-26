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
        
        return redirect(route('admin.permissions.index'));
        
    }
}
