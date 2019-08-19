<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$1Sl8.TMMdD7lfAlRazR4rOA21pW2jOSyoDMYGYbT9p/jUvJ0k15n.',
            'remember_token' => null,
            'created_at'     => '2019-08-19 12:39:51',
            'updated_at'     => '2019-08-19 12:39:51',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
