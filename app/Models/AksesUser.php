<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AksesUser extends Model
{
    protected $table = 'akses';
    protected $fillable = ['level_user_id','menu_id','akses','insert','update','delete'];

    public function menu(){
        return $this->belongsTo(Menu::class, 'menu_id');
    }

    public function leveluser(){
        return $this->belongsTo(LevelUser::class,'level_user_id');
    }
}
