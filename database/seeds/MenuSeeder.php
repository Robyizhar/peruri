<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            [
                'id' => 1,
                'nama_menu' => 'master data',
                'level_menu' => 'main_menu',
                'icon' => 'fa fa-cog fa-spin',
                'url'=>'',
                'aktif' => 'Y',
                'no_urut' => 1,
                'master_menu' => 0
            
            ],
            [
                'id' => 2,
                'nama_menu' => 'Jabatan',
                'level_menu' => 'sub_menu',
                'url'=>'jabatan',
                'icon' => 'fa fa-black-tie',
                'aktif' => 'Y',
                'no_urut' => 2,
                'master_menu' => 1
            
            ],
             [
                 'id' => 3,
                'nama_menu' => 'Level',
                'level_menu' => 'sub_menu',
                'icon' => 'fa fa-street-view',
                'url'=>'level',
                'aktif' => 'Y',
                'no_urut' => 3,
                'master_menu' => 1
            
            ],
            [
                'id' => 4,
                'nama_menu' => 'Unit',
                'level_menu' => 'sub_menu',
                'url'=>'unit',
                'icon' =>'fa fa-building-o',
                'aktif' => 'Y',
                'no_urut' => 4,
                'master_menu' => 1
            
            ],
             [
                 'id' => 5,
                'nama_menu' => 'Pangkat',
                'level_menu' => 'sub_menu',
                'icon' => 'fa fa-handshake-o',
                'url'=>'pangkat',
                'aktif' => 'Y',
                'no_urut' => 5,
                'master_menu' => 1
            
            ],
            [
                'id' => 6,
                'nama_menu' => 'Grade Jabatan',
                'level_menu' => 'sub_menu',
                'icon'=>'fa fa-sort-numeric-desc',
                'url'=>'grade_jabatan',
                'aktif' => 'Y',
                'no_urut' => 6,
                'master_menu' => 1
            
            ],

            [
                'id' => 7,
                'nama_menu' => 'Hak Akses Menu User',
                'level_menu' => 'main_menu',
                'icon' => 'fa fa-users',
                'url'=>'grade_jabatan',
                'aktif' => 'Y',
                'no_urut' => 7,
                'master_menu' => 0
            
            ],
            [
                'id' => 8,
                'nama_menu' => 'Menu',
                'level_menu' => 'sub_menu',
                'icon' => 'fa fa-outdent',
                'url'=>'Hak_akses/menu',
                'aktif' => 'Y',
                'no_urut' => 8,
                'master_menu' => 7
            
            ],
            [
                'id' => 9,
                'nama_menu' => 'Level Admin',
                'level_menu' => 'sub_menu',
                'icon'=>'fa fa-shopping-bag',
                'url'=>'Hak_akses/levelUser',
                'aktif' => 'Y',
                'no_urut' => 9,
                'master_menu' => 7
            
            ],
            [
                'id' => 10,
                'nama_menu' => 'Hak Akses Menu',
                'level_menu' => 'sub_menu',
                'icon' => ' fa-user-times',
                'url'=>'Hak_akses/akses',
                'aktif' => 'Y',
                'no_urut' => 10,
                'master_menu' => 7
            
            ],
            [
                'id' => 11,
                'nama_menu' => 'user Admin',
                'level_menu' => 'sub_menu',
                'icon' => 'fa fa-user-plus',
                'url'=>'Hak_akses/user',
                'aktif' => 'Y',
                'no_urut' => 11,
                'master_menu' => 7
            
            ],
            [
                'id' => 12,
                'nama_menu' => 'Data Karyawan',
                'level_menu' => 'main_menu',
                'icon' => 'fa fa-vcard-o',
                'url'=>'',
                'aktif' => 'Y',
                'no_urut' => 12,
                'master_menu' => 0
            
            ],
            [
                'id' => 13,
                'nama_menu' => 'karyawan Organik',
                'level_menu' => 'sub_menu',
                'icon' => 'fa fa-id-card-o',
                'url'=>'karyawan/show',
                'aktif' => 'Y',
                'no_urut' => 13,
                'master_menu' => 12
            
            ],
            [
                'id' => 14,
                'nama_menu' => 'karyawan PKWT',
                'level_menu' => 'sub_menu',
                'icon' => 'fa fa-id-card',
                'url'=>'karyawanPkwt',
                'aktif' => 'Y',
                'no_urut' => 14,
                'master_menu' => 12
            
            ],
            [
                'id' => 15,
                'nama_menu' => 'Promosi Karyawan',
                'level_menu' => 'out_menu',
                'icon' => 'fa fa-bullhorn',
                'url'=>'promosi',
                'aktif' => 'Y',
                'no_urut' => 15,
                'master_menu' => 55
            
            ],
            [
                'id' => 16,
                'nama_menu' => 'Rekapitulasi',
                'level_menu' => 'main_menu',
                'icon' => 'fa fa-file-text-o',
                'url'=>'',
                'aktif' => 'Y',
                'no_urut' => 16,
                'master_menu' => 0
            
            ],
             [
                 'id' => 17,
                'nama_menu' => 'Grafik Level',
                'level_menu' => 'sub_menu',
                'icon'=>'ti-bar-chart',
                'url'=>'grafikLevel/1',
                'aktif' => 'Y',
                'no_urut' => 17,
                'master_menu' => 16
            
            ],
            [
                'id' => 18,
                'nama_menu' => 'Grafik Jabatan',
                'level_menu' => 'sub_menu',
                'icon' => 'fa fa-bar-chart-o',
                'url'=>'grafikJabatan/11',
                'aktif' => 'Y',
                'no_urut' => 18,
                'master_menu' => 16
            
            ],
            [
                'id' => 19,
                'nama_menu' => 'Grafik Pangkat',
                'level_menu' => 'sub_menu',
                'icon'=> 'fa fa-line-chart',
                'url'=>'grafikPangkat/11',
                'aktif' => 'Y',
                'no_urut' => 19,
                'master_menu' => 16
            
            ],
            [
                'id' => 20,
                'nama_menu' => 'Grafik PKWT',
                'level_menu' => 'sub_menu',
                'icon'=> 'fa fa-file-text-o',
                'url'=>'grafikPkwt',
                'aktif' => 'Y',
                'no_urut' => 20,
                'master_menu' => 16
            
            ],
            [
                'id' => 21,
                'nama_menu' => 'Penilaian Karyawan',
                'level_menu' => 'main_menu',
                'icon'=> 'fa fa-file-text-o',
                'url'=>'',
                'aktif' => 'Y',
                'no_urut' => 21,
                'master_menu' => 0
            
            ],
            [
                'id' => 22,
                'nama_menu' => 'Penilaian Behavior',
                'level_menu' => 'sub_menu',
                'icon'=> 'fa fa-file-text-o',
                'url'=>'penilaianKaryawan',
                'aktif' => 'Y',
                'no_urut' => 22,
                'master_menu' => 21
            
            ],
            [
                'id' => 23,
                'nama_menu' => 'Penilaian NKI',
                'level_menu' => 'sub_menu',
                'icon'=> 'fa fa-file-text-o',
                'url'=>'nilainki',
                'aktif' => 'Y',
                'no_urut' => 23,
                'master_menu' => 21
            
            ],
            [
                'id' => 24,
                'nama_menu' => 'Penilaian Cuti',
                'level_menu' => 'sub_menu',
                'icon'=> 'fa fa-file-text-o',
                'url'=>'cuti',
                'aktif' => 'Y',
                'no_urut' => 24,
                'master_menu' => 21
            
            ],
        ]);
    }
}
