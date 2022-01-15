<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilainki extends Model
{
    protected $table = 'nilai_nki';
    protected $fillable = ['id_karyawan','tahun','nilai_nki'];

    public function Karyawan(){
        return $this->belongsTo(Karyawan::class, 'id_karyawan');
    }
}
