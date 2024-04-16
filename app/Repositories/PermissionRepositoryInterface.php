<?php

namespace App\Repositories;

interface PermissionRepositoryInterface
{
    public function allPermissions();

    public function allRoles();
    public function createRole($data);

    public function attachPermissions($data);

    // public static function findByOwner($id);
    
    // public function findById($id);


    // public function kill(Permission $permission);

    // public function edit(Permission $permission, $data);

}