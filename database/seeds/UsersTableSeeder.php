<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$Xu53BljXRgVEUFz82BZFFuug8hE33KwhLXr.4vXZnHnc96XfnuclC',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
