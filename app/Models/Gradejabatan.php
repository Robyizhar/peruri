<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gradejabatan extends Model
{
    protected $table ='grade_jabatan';
    protected $fillable=['grade_jabatan'];

    // public function karyawans(){
    //     return $this->hasMany('App\Models\Karyawan', 'id_jabatan');
    // }
}