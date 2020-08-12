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
        //reset the users table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        //generate 3 users/author
        DB::table('users')->insert([
        	[
        		'name' => "CongDat",
        		'email' => "huynhcongdat1999@gmail.com",
        		'password' => bcrypt('secret')
        	],
        	[
        		'name' => "ThaiAn",
        		'email' => "hothaian@gmail.com",
        		'password' => bcrypt('secret')
        	],
        	[
        		'name' => "DatAn",
        		'email' => "DatAn@gmail.com",
        		'password' => bcrypt('secret')
        	],
        ]);
    }
}
