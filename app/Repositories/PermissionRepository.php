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
}
