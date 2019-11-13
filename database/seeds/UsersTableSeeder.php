<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Sabbir hossain Jiko',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'remember_token' => str_random(15),
            'isadmin' => 1,
        ]);
    }
}
