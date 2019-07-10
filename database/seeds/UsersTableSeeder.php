<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
            'name' => 'admin',
            'email' => 'admin.@gmail.com',
            'role'=>'1',
            'password' => bcrypt('secret')
        ],
            [

                'name' => 'directors',
                'email' => 'directors@gmail.com',
                'role'=>'2',
                'password' => bcrypt('secret')
           ]

            );
    }
}
