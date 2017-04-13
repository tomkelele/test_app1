<?php

use Illuminate\Database\Seeder;

class UsersTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      => 'user10',
            'email'     => 'user10@gmail.com',
            'password'  => bcrypt('123456'),
            'role'      => 1
        ]);

        DB::table('users')->insert([
        	'name' 		=> 'user11',
        	'email' 	=> 'user11@gmail.com',
        	'password' 	=> bcrypt('123456'),
            'role'      => 1
        ]);
        DB::table('users')->insert([
            'name'      => 'user12',
            'email'     => 'user12@gmail.com',
            'password'  => bcrypt('123456'),
            'role'      => 1
        ]);
        DB::table('users')->insert([
            'name'      => 'user13',
            'email'     => 'user13@gmail.com',
            'password'  => bcrypt('123456'),
            'role'      => 1
        ]);
    }
}
