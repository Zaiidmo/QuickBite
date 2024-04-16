<?php

namespace App\Repositories;

use App\Models\Permission;
use App\Models\Role;

class PermissionRepository implements PermissionRepositoryInterface
{
    public function allPermissions()
    {
        return Permission::all();
    }

    public function allRoles()
    {
        return Role::all();
    }

    public function createRole($data){
        $role = Role::create($data);
        return $role;
    }

    public function attachPermissions($data)
{
    $permissionIds = $data['permission_id'];

    $permissions = [];

    foreach ($permissionIds as $permissionId) {
        $permissions[] = Permission::find($permissionId);
    }

    // Create the role excluding the permission_id from the data
    unset($data['permission_id']);
    $role = $this->createRole($data);

    // Attach permissions to the role
    $role->permissions()->saveMany($permissions);
}

    public function kill(Role $role)
    {
        $role->delete();
    }

    public function edit(Role $role, $data){
        $permissionIds = $data['permission_id'];

        $permissions = [];
    
        foreach ($permissionIds as $permissionId) {
            $permissions[] = Permission::find($permissionId);
        }
    
        // Create the role excluding the permission_id from the data
        unset($data['permission_id']);

        $role->update($data);

        // Attach permissions to the role
        $role->permissions()->sync($permissionIds, false);
    }

}
