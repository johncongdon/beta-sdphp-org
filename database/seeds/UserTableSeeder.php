<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

    public function run()
    {
        \DB::table('users')->truncate();

        \DB::table('users')->insert(array(
            'name'      => 'Eric Johnson',
            'email'     => 'eric@sdphp.org',
            'password'  => bcrypt('password'),
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
        ));
    }
}
