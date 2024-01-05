<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Institute;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Roles
        $admin = Role::create(['name' => 'admin']);
        $client = Role::create(['name' => 'client']);

        // Permissions
        Permission::create(['name' => 'add store']); 
        Permission::create(['name' => 'add menu']);
        Permission::create(['name' => 'add product']);
        Permission::create(['name' => 'manage orders']);
        
        Permission::create(['name' => 'order product']);

        // Permissions give
        $admin->givePermissionTo('add store');
        $admin->givePermissionTo('add menu');
        $admin->givePermissionTo('add product');
        $admin->givePermissionTo('manage orders');

        $client->givePermissionTo('order product');


        // Demonstrational Users
        $admin = \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.lt',
            'password' => bcrypt('admin'),
        ]);

        $admin->assignRole('admin');

        for ($i = 0; $i < 10; $i++) {
            $user = \App\Models\User::factory()->create([
                'name' => 'client' . $i,
                'email' => 'client' . $i . '@client.lt',
                'password' => bcrypt('password'),
            ]);
            $user->assignRole('client');
            $user->givePermissionTo('order product');
        }

        // Database seeders
        $this->call([
            InstituteSeeder::class,
            ProductSeeder::class,
            MenuSeeder::class,
            OrderSeeder::class,
        ]);
    }
}
