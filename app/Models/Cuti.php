<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    protected $table = 'cuti';
    protected $fillable = ['id_karyawan','jenis_cuti','jumlah_cuti','file'];

    public function karyawan(){
        return $this->belongsTo(Karyawan::class, 'id_karyawan');
    }
}
