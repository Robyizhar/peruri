<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        $this->call(MenuSeeder::class);
        $this->call(levelUserSeeder::class);
        $this->call(AksesSeeder::class);
        $this->call(UserSeeder::class);
    }
}
