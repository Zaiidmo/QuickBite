<?php

namespace Database\Seeders;

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
            Role::create($roleData);
        }
    }
}

