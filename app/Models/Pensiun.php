<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pensiun extends Model
{
    protected $table ='pensiuns';
    protected $fillable = ['nama','unit_kerja','pangkat','sisa_masaTugas'];
}
