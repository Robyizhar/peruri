<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{

    protected $fillable=['kode_unit', 'unit_kerja'];

    public function karyawans(){
        return $this->hasMany('App\Models\Karyawan');
    }

    public function Penilaian(){
        return $this->hasMany('App\Models\Penilaian');
    }
}