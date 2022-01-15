<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'muhamad wildan',
            'level_user_id' =>1,
            'email' => 'wildanmuhamad961@gmail.com',
            'password' => bcrypt('123456'),
            'remember_token' => Str::random(40)
            ]);
            
            DB::table('users')->insert([
            'name' => 'muhamad dedi',
            'level_user_id' =>1,
            'email' => 'dediganteng@gmail.com',
            'password' => bcrypt('123456'), 
            'remember_token' => Str::random(40)
        ]);
    }
}
