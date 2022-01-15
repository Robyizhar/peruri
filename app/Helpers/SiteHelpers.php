<?php

    namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SiteHelpers{

        

        // function menampilkan user yang hak akses nya main menu
        public static function main_menu(){
            $user=Auth::user()->level_user_id;
            $main_menu = DB::table('akses')->join('menu','menu.id','=','akses.menu_id')
                        ->select('menu.*', 'akses.level_user_id','akses.akses', 'akses.insert','akses.update','akses.delete')
                        ->where('akses.level_user_id',$user)
                        ->where('menu.level_menu','main_menu')->get();
            return $main_menu;
        }

        public static function sub_menu(){
             $user=Auth::user()->level_user_id;
            $sub_menu = DB::table('akses')->join('menu','menu.id','akses.menu_id')
                        ->select('menu.*', 'akses.level_user_id','akses.akses','akses.insert','akses.update','akses.delete')
                        ->where('akses.level_user_id',$user)
                        ->where('menu.level_menu','sub_menu')->get();
            return $sub_menu;
        }

        public static function out_menu(){
             $user=Auth::user()->level_user_id;
            $out_menu = DB::table('akses')->join('menu','menu.id','akses.menu_id')
                        ->select('menu.*', 'akses.level_user_id','akses.akses','akses.insert','akses.update','akses.delete')
                        ->where('akses.level_user_id',$user)
                        ->where('menu.level_menu','out_menu')->get();
            return $out_menu;
        }
    }


?>