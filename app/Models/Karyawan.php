<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $fillable =['np','full_name','tanggal_lahir','tanggal_masuk'
                            ,'tanggal_mpp','tanggal_pensiun','id_jabatan','unit_kerja_id','grade_pangkat'
                            ,'id_grade_jabatan','level_id','pangkat_id','tmt_jabatan'];
    protected $date = ['tmt_jabatan'];

    public function Jabatan()
    {
        return $this->belongsTo(Jabatan::class,'id_jabatan');
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function penilaianKaryawan()
    {
        return $this->belongsTo(Penilaian::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class,'unit_kerja_id');
    }

    public function pangkat()
    {
        return $this->belongsTo(Pangkat::class);
    }

      public function Grade_jabatan()
    {
        return $this->belongsTo(Grade_jabatan::class,'id_grade_jabatan');
    }

    public function Penilaian(){
        return $this->hasMany('App\Models\Penilaian','id_karyawan');
    }

    public function NilaiNki(){
        return $this->hasMany('App\Models\Nilainki','id_karyawan');
    }

}