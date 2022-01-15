<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenugasanPkwt extends Model
{
    protected $table = 'penugasan';

    protected $fillable = ['kontrak_ke','id_nomorSp','tanggalSp','tanggal_mulai','tanggal_berakhir','sebelum_adendum','masa_jeda'];
}
