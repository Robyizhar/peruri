<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class levelUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('level_users')->insert([
            [
                'id'=> 1,
                'nama_level_user' => 'SDM'
            ],
            [
                'id'=>2,
                'nama_level_user' => 'Kadev'
            ],
            [
                'id'=>3,
                'nama_level_user' => 'KadIv'
            ],
            [
                'id'=>4,
                'nama_level_user' => 'Kasek'
            ],
            [
                'id'=>5,
                'nama_level_user' => 'Kaun'
            ]
        ]);
    }
}
