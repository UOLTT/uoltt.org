<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'display_name' => 'Administrator'
        ]);
        Role::create([
            'name' => 'moderator',
            'display_name' => 'Moderator'
        ]);
        Role::create([
            'name' => 'contributor',
            'display_name' => 'Contributor'
        ]);
    }
}
