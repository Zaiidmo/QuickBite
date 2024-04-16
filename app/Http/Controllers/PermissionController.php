<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
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
        $roles = $this->permissionRepository->allRoles();
        $permissions = $this->permissionRepository->allPermissions();
        $users = UserRepository::all();
        return view('Admin.authorizations', compact('roles', 'permissions', 'users'));
    }

    public function store(StoreRoleRequest $request)
    {
        $data = $request->validated();
        $this->permissionRepository->attachPermissions($data);

        return redirect()->back()->with('success', 'Role created successfully');
    }

    public function destroy(Role $role)
    {
        // dd($role);
        $this->permissionRepository->kill($role);
        return redirect()->back()->with('success', 'Role deleted successfully');
    }

    public function update(Role $role, UpdateRoleRequest $request)
    {
        $data = $request->validated();
        $this->permissionRepository->edit($role, $data);
        return redirect()->back()->with('success', 'Role updated successfully');
    }
}
