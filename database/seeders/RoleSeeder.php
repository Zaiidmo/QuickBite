<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $permissions = Permission::all();
        $superPermissions = $permissions->pluck('id')->toArray();
        $customerPermissions = $permissions->where('slug', 'like', 'view-' or 'slug' , 'like' , 'place-')->pluck('id')->toArray();
        $roles = [
            [
                'name' => 'Super Admin',
                'slug' => 'super-admin',
            ],
            [
                'name' => 'Admin',
                'slug' => 'admin',
            ],
            [
                'name'=> 'Customer',
                'slug'=> 'customer',
            ],
            [
                'name'=> 'Restaurant Owner',
                'slug'=> 'restaurant-owner',
            ],
            [
                'name'=> 'Delivery Guy',
                'slug'=> 'driver',
            ]
        ];

        foreach ($roles as $roleData) {
            // Create or update the role
            $role = Role::updateOrCreate(
                ['slug' => $roleData['slug']],
                ['name' => $roleData['name']]
            );

            // If the role is Super Admin, assign all permissions
            if ($roleData['slug'] === 'super-admin') {
                $role->permissions()->sync($superPermissions);
            } else if($roleData['slug'] === 'customer') {
                $role->permissions()->sync($customerPermissions);
            }
        }
    }
}

