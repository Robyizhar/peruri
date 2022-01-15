<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table ='jabatan';
    protected $fillable=['kode_jabatan','nama_jabatan'];

    public function karyawans(){
        return $this->hasMany('App\Models\Karyawan', 'id_jabatan');
    }
}