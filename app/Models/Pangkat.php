<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pangkat extends Model
{
    protected $fillable=['nama_pangkat'];

    public function karyawans(){
        return $this->hasMany('App\Models\Karyawan');
    }
}