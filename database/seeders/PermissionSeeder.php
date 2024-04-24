<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'name' => 'Create User',
                'slug' => 'create-user',
            ],
            [
                'name' => 'Edit User',
                'slug' => 'edit-user',
            ],
            [
                'name'=> 'Delete User',
                'slug'=> 'delete-user',
            ],
            [
                'name'=> 'View User',
                'slug'=> 'view-user',
            ],
            [
                'name'=> 'Create Role',
                'slug'=> 'create-role',
            ],
            [
                'name'=> 'Assign Role',
                'slug'=> 'assign-role',
            ],
            [
                'name'=> 'Remove Role',
                'slug'=> 'remove-role',
            ],
            [
                'name'=> 'Create Restaurant',
                'slug'=> 'create-restaurant',
            ],
            [
                'name'=> 'Edit Restaurant',
                'slug'=> 'edit-restaurant',
            ],
            [
                'name'=> 'Delete Restaurant',
                'slug'=> 'delete-restaurant',
            ],
            [
                'name'=> 'View Restaurant',
                'slug'=> 'view-restaurant',
            ],
            [
                'name'=> 'Create Meal',
                'slug'=> 'create-meal',
            ],
            [
                'name'=> 'Edit Meal',
                'slug'=> 'edit-meal',
            ],
            [
                'name'=> 'Delete Meal',
                'slug'=> 'delete-meal',
            ],
            [
                'name'=> 'View Meal',
                'slug'=> 'view-meal',
            ],
            [
                'name'=> 'Place order',
                'slug'=> 'place-order',
            ],

        ];

        foreach ($permissions as $permissionData) {
            Permission::create($permissionData);
        }
    }
}
