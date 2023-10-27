<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

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
            'name' => 'Testing',
            'email' => 'testing@gmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
