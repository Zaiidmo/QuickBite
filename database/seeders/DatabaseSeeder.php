<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        \App\Models\User::create([
            'name' => 'Super Admin',
            'email' => 'super@quickbite.com',
        'password' => bcrypt('password'),]);

        
    }
}
