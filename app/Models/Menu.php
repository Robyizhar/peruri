<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $fillable = ['nama_menu','level_menu','master_menu','url','icon','aktif','no_urut'];

}
