<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Models\user_role;
use Illuminate\Http\Request;
use App\Traits\HasRoleOrPermission;



class HomeController extends Controller
{
    public function index()
    {
        return view('home.userpage');
    }

    
    public function permissions(Request $req,$id)
    {
        $user = User::find($id);
     
        $admin_role = Role::where('slug', $req->flex)->first();
        $check= user_role::where('user_id', $id)->first();
        
        if($check==null){
            
            $user->roles()->attach($admin_role); 
      

         return redirect()->back()->with('msg','Role assigned to user');
           
        }else
        {
            return redirect()->back()->with('msg','User already have Role');
        }
        $user_per=permission::where('slug', $req->add);

         $user->permissions()->attach($user_per);

   

    }
    public function test()
    {
     $user= new user();
     
     $user->HasRole('student');
  
    }
    public function roles()
    {
     $user=user::all();
     return view('admin.roles',compact('user'));
    }
    public function permission($id)
    {
     $user=user::find($id);
     return view('admin.permission',compact('user'));
    }

}
