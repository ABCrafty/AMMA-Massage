<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;
use App\User;
use App\Homepage;

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
            'username' => 'Romain',
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
        $this->command->warn("Admin role created successfully");

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

        $homepage = Homepage::create([
            'phone' => '0909090909',
            'phone_text' => 'Mon numéro de tél',
            'title' => 'Amma-Massage',
            'content_title' => 'Découvrez le massage Amma',
            'title_link' => 'Découvrir le message Amma',
            'service_1' => 'Service 1',
            'service_2' => 'Service 2',
            'service_3' => 'Service 3',
            'service_4' => 'Service 4',
            'offer_preview' => 'Découvrir mes différentes offres selon vos besoins',
            'offer_title_1' => 'Titre offre 1',
            'offer_title_2' => 'Titre offre 2',
            'offer_title_3' => 'Titre offre 3',
            'offer_content_1' => 'COntenu de la 1ère offre, blabla blabla blabla blabla blabla blabla blabla blabla',
            'offer_content_2' => 'COntenu de la 2ème offre, blabla blabla blabla blabla blabla blabla blabla blabla',
            'offer_content_3' => 'COntenu de la 3ème offre, blabla blabla blabla blabla blabla blabla blabla blabla',
            'offer_link_1' => 'Lien vers la 1ère offre',
            'offer_link_2' => 'Lien vers la 2ème offre',
            'offer_link_3' => 'Lien vers la 3ème offre'
        ]);
        $this->command->warn("Homepage content generated");
    }
}
