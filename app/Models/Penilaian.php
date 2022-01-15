<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    protected $table = 'penilaian_karyawan';
    protected $fillable = ['id_karyawan','nama_karyawan','id_unitKerja','Tahun','nilai','status_ijin','nilai_ijin','sertifikasi_lsp','nilai_kedisiplinan','nilai_kepatuhan','nilai_sikapKerja','nilai_inisiatif','no'];

    public function Karyawan()
    {
        return $this->belongsTo(Karyawan::class,'id_karyawan');
    }

    public function Units()
    {
        return $this->belongsTo(Unit::class,'id_unitKerja');
    }
}
