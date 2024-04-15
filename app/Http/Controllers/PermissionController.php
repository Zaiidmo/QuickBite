<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use App\Models\Permission;
use App\Models\Role;
use app\Repositories\PermissionRepository;
use App\Repositories\PermissionRepositoryInterface;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    protected $permissionRepository;

    public function __construct(PermissionRepositoryInterface $permissionRepository)
    {
        $this->permissionRepository = $permissionRepository;
    }
    public function index()
    {
        $roles = PermissionRepository::allRoles();
        $roles = PermissionRepository::allPermissions();
        $users = UserRepository::all();
        return view('Admin.authorizations', compact('roles', 'permissions', 'users'));
    }

    public function store(StoreRoleRequest $request)
    {
        
    }
}
