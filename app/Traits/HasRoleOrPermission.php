<?php

namespace App\Traits;

use App\Models\Permission;
use App\Models\Role;

trait HasRoleOrPermission
{

    // Check user role
     
    public function HasRole($role)
    {
       
      return (bool)  $this->roles->contains('slug', $role);

        
        
    }

    // Check user Permission
    public function HasPermission($permission)
    {
        return (bool) $this->permissions->contains('slug', $permission);
    }

    // Check permission through role

    public function HasPermissionThroughRole($permission)
    {
        $user_permission = Permission::where('slug', $permission)->first();    

        foreach ($user_permission->roles as $role) {
            if($this->roles->contains('slug', $role->slug)) {
                return true;
            }
        }
        return false;
    }

    
    // check permission through role and heck permission alone

    public function hasPermissionTo($permission)
    {
        return (bool) $this->hasPermission($permission) || $this->hasPermissionThroughRole($permission);
    }



}
