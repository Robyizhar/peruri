<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KaryawanPkwt extends Model
{
    protected $table = 'karyawan_pkwt';
    protected $fillable = ['np','nama','id_unit','id_kodeBagan','status','kontrak_ke'];

    public function unit()
    {
        return $this->belongsTo(Unit::class,'unit_kerja_id');
    }
}
