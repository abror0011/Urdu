<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Models\Teacher;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'phone' => '942330011',
            'password' => bcrypt('password'),
            'avatar' => '/dashboard/img/default-avatar.png',
        ]);
        
        $user->assignRole('admin');

    }
}
