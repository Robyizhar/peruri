<?php

namespace App\Http\Controllers\Pensiun;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class PensiunController extends Controller
{
    public function index(){

        $data_pensiun=Karyawan::where('status_pensiun',1)->get();
    //    return $data_pensiun;
        return view('pages.admin.pensiun.index',compact('data_pensiun'));
    }
}
