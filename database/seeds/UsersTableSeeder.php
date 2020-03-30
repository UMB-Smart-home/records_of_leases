<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                 => 1,
                'name'               => 'Admin',
                'email'              => 'admin@admin.com',
                'password'           => '$2y$10$4KyyImWWz4nkRoFuZtZlFOVlUjikb350Dyrg5eKgKrFzuOscXXKKC',
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2020-03-11 19:34:09',
                'verification_token' => '',
            ],
        ];

        User::insert($users);

    }
}
