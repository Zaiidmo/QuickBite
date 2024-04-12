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

        // Super Admin Seeder
        $superAdminRole = Role::where('slug', 'super-admin')->first();

        $superAdmin = User::create([
            'username' => 'Super Admin',
            'email' => 'super@quickbite.com',
            'password' => bcrypt('password'),
        ]);
        $superAdmin->roles()->attach($superAdminRole);
    }
}
