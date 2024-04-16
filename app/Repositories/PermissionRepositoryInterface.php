<?php

namespace App\Repositories;

use App\Models\Permission;
use App\Models\Role;

interface PermissionRepositoryInterface
{
    public function allPermissions();

    public function allRoles();
    public function createRole($data);

    public function attachPermissions($data);
    
    public function kill(Role $role);

    public function edit(Role $role, $data);
    
    // public static function findByOwner($id);
    
    // public function findById($id);




}