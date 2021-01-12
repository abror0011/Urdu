<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class UserPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'umumiy boshqaruv']);
        Permission::create(['name' => 'amaliyot qo`shish']);

        $role = Role::findByName('admin');
        $role->givePermissionTo(['umumiy boshqaruv']);

        $role = Role::findByName('users');
        $role->givePermissionTo(['amaliyot qo`shish']);
    }
}
