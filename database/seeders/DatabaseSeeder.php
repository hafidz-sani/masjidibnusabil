<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create users using factory
        \App\Models\User::factory(10)->create();

        // Create an admin user with a super-admin role
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
        ]);

        // Create a super-admin role and assign it to the admin user
        Role::create(['name' =>'super-admin']);
        \App\Models\User::where('email', 'admin@admin.com')->first()->assignRole('super-admin');
    }
}
