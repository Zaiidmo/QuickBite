<?php

namespace App\Repositories;

use App\Models\Permission;

interface PermissionRepositoryInterface
{
    public static function allPermissions();

    public static function allRoles();

    // public static function findByOwner($id);
    
    // public function findById($id);

    // public function create($data);

    // public function kill(Permission $permission);

    // public function edit(Permission $permission, $data);

}