<?php 

namespace App\Permissions;

use App\Models\Permission;
use App\Models\Role;

trait HasPermissionsTrait {
    //Give Permission To An Actor
    public function givePermissionTo(... $permissions) {
        $permissions = $this->getAllPermissions($permissions);
        if ($permissions === null) {
            return $this;
        }
        $this->permissions()->saveMany($permissions);
        return $this;
    }

    //Take Permission Of An Actor
    public function withdrawPermissionTo(... $permissions) {
        $permissions = $this->getAllPermissions($permissions);
        $this->permissions()->detach($permissions);
        return $this;
    }

    //Refresh Permissions
    public function refreshPermissions(... $permissions) {
        $this->permissions()->detach();
        return $this->givePermissionTo($permissions);
    }

    //Check If Actor Has Permission
    public function hasPermissionTo($permission) {
        return $this->hasPermissionThroughRole($permission) || $this->hasPermission($permission);
    }

    //Check If Actor Has Permission Through Role
    protected function hasPermissionThroughRole($permission) {
        foreach ($permission->roles as $role) {
            if ($this->roles->contains($role)) {
                return true;
            }
        }
        return false;
    }

    //Check If Actor Has Role
    public function hasRole(... $roles) {
        foreach ($roles as $role) {
            if ($this->roles->contains('name', $role)) {
                return true;
            }
        }
        return false;
    }

    //Relationships
    public function roles() {
        return $this->belongsToMany(Role::class);
    }
    public function permissions() {
        return $this->belongsToMany(Permission::class);
    }

    //Protected
    protected function hasPermission($permission) {
        return (bool) $this->permissions->where('slug', $permission->slug)->count();
    }
    public function getAllPermissions(array $permissions) {
        return Permission::whereIn('slug', $permissions)->get();
    }
}
