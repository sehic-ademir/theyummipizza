<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'john_doe@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => str_random(10),
            'admin' => 1
        ]);
        User::create([
            'name' => 'Not Registered',
            'email' => 'not_registered',
            'password' => Hash::make(str_random(10)),
            'remember_token' => str_random(10),
            'admin' => 0
        ]);
    }
}
