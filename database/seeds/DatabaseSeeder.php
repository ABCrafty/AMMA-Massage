<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);



        if ($this->command->confirm('Do you wish to refresh migration before seeding, it will clear all old data ?')) {
            // Call the php artisan migrate:refresh
            $this->command->call('migrate:refresh');
            $this->command->warn("Data cleared, starting from blank database.");
        }

        //create a user
        $mainAdmin = User::create([
            'username' => 'Alex',
            'email' => 'someadress@example.com',
            'description' => '',
            'password' => 'password',
            'avatar' => ''
        ]);


        $this->command->warn("User created successfully");

        //create a role of admin
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Admin',
            'description' => 'Only one and only admin',
        ]);

        Role::create([
            'name' => 'guest',
            'display_name' => 'Invité',
            'description' => 'Role basique sur le site',
        ]);
        $this->command->warn("Admin and guest role created successfully");

        //create a permission for role
        $manageUsers = Permission::create([
            'name' => 'manage-users-roles-and-permissions',
            'display_name' => 'Manage Users,Roles and Permissions',
            'description' => 'Can manage users,roles and permission"s',
        ]);
        $this->command->warn("Permission to manage user roles and permissions created successfully");

        //here attaching permission for admin role
        $admin->attachPermission($manageUsers);
        $this->command->warn("User can now manage roles and permissions ! GG");

        //here attaching role for user
        $mainAdmin->attachRole($admin);
        $this->command->warn("User correctly promoted to admin");
    }
}
