<?php

use Illuminate\Database\Seeder;
use Furbook\User;

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
          'name' => 'admin',
          'email' => 'admin@gmail.com',
          'password' => bcrypt('123456'),
          'is_admin' => true,
        ]);

        User::create([
          'name' => 'user1',
          'email' => 'user1@gmail.com',
          'password' => bcrypt('123456'),
          'is_admin' => false,
        ]);

        User::create([
          'name' => 'user2',
          'email' => 'user2@gmail.com',
          'password' => bcrypt('123456'),
          'is_admin' => false,
        ]);
    }
}
