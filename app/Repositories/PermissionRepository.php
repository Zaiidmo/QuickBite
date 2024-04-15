<?php 

namespace app\Repositories;

use App\Models\Permission;
use App\Models\Role;

class PermissionRepository implements PermissionRepositoryInterface
{
    public static function allPermissions()
    {
        return Permission::all();
    }

    public static function allRoles()
    {
        return Role::all();
    }
}