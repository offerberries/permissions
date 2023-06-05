<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthrizationController extends Controller
{
    public function createRole()
    {
        $roles = Role::with('permissions')->get();
        return view('admin.create-role', compact('roles'));
    }

    public function storeRole(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $role = new Role();
        $role->name = $request->name;
        $role->slug = Str::slug($request->name);
        $role->save();

        return redirect()->back();
    }

    public function createPermission()
    {
        $permissions = Permission::all();
        return view('admin.create-permission', compact('permissions'));
    }

    public function storePermission(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $role = new Permission();
        $role->name = $request->name;
        $role->slug = Str::slug($request->name);
        $role->save();

        return redirect()->back();
    }

    public function createAssignPermissionToRole()
    {
        $permissions = Permission::all();
        $roles = Role::all();

        return view('admin.assign-permissions-to-role', compact('permissions', 'roles'));
    }

    public function storeAssignPermissionToRole(Request $request)
    {

        $request->validate([
            'role' => 'required',
            'perms' => 'array'
        ]);

        $role = Role::findOrFail($request->role);
        
        foreach ($request->perms as $perm) {
            $role->permissions()->attach($perm);
        }


        return redirect()->back();
    }

}
