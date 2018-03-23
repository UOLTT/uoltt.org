<?php

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ManageUserRoles = Permission::create([
            'name'         => 'manage_user_roles',
            'display_name' => 'Manage User Roles',
        ]);
        $ManageUsers = Permission::create([
            'name'         => 'manage_users',
            'display_name' => 'Manage Users',
        ]);
        $ManageReports = Permission::create([
            'name'         => 'manage_reports',
            'display_name' => 'Manage Reports',
        ]);
        $CreateReports = Permission::create([
            'name'         => 'create_reports',
            'display_name' => 'Create Reports',
        ]);

        Role::findByName('admin')
            ->attachPermissions([
                $ManageUserRoles,
                $ManageUsers,
                $ManageReports,
                $CreateReports,
            ]);

        Role::findByName('moderator')
            ->attachPermissions([
                $ManageUsers,
                $ManageReports,
                $CreateReports,
            ]);

        Role::findByName('contributor')
            ->attachPermissions([
                $CreateReports,
            ]);
    }
}
