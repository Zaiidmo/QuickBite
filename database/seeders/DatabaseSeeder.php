<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Permission Seeder
        $this->call(PermissionSeeder::class);

        //Role Seeder
        $this->call(RoleSeeder::class);

        //Category Seeder
        $this->call(CategorySeeder::class);

        //Retrieve Roles
        $superAdminRole = Role::where('slug', 'super-admin')->first();
        $adminRole = Role::where('slug', 'admin')->first();
        $ownerRole = Role::where('slug', 'restaurant-owner')->first();
        $deliveryRole = Role::where('slug', 'driver')->first();
        $customerRole = Role::where('slug', 'customer')->first();

        //Create Users
        $superAdmin = User::create([
            'username' => 'Super Admin',
            'email' => 'super@quickbite.com',
            'password' => bcrypt('password'),
        ]);
        $admin = User::create([
            'username' => 'Admin',
            'email' => 'admin@quickbite.com',
            'password' => bcrypt('password'),
        ]);
        $owner = User::create([
            'username' => 'Restaurant Owner',
            'email' => 'owner@quickbite.com',
            'password' => bcrypt('password'),
        ]); 
        $delivery = User::create([
            'username' => 'Delivery Driver',
            'email' => 'delivery@quickbite.com',
            'password' => bcrypt('password'),
        ]);
        $customer = User::create([
            'username' => 'Customer',
            'email' => 'customer@quickbite.com',
            'password' => bcrypt('password'),
        ]);

        //Attach Roles
        $superAdmin->roles()->attach($superAdminRole);
        $admin->roles()->attach($adminRole);
        $owner->roles()->attach($ownerRole);
        $delivery->roles()->attach($deliveryRole);
        $customer->roles()->attach($customerRole);
    }
}
