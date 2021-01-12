<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'users']);

    }
}
