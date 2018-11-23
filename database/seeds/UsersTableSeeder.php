<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'          => 'user1',
            'email'         => 'user1@test.com',
            'password'      => bcrypt('123456'),
        ]

        );
    }
}
