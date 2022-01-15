<?php

namespace App\Http\Controllers;


use App\Models\{Karyawan,Unit,Level,Jabatan,Grade_jabatan, Pangkat,Pensiun};

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DateTime;
// use App\Chart;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(User $user)
    {


        // $dataKaryawan = Karyawan::where('status_pensiun',1)->get();
    //     $karyawanPensiun = DB::table('karyawans')
    //                         ->select('tanggal_pensiun','status_pensiun', DB::raw("DATE_FORMAT(tanggal_pensiun, '%m-%Y') new_date"), DB::raw('YEAR(tanggal_pensiun) year, MONTH(tanggal_pensiun) month'), DB::raw('count(*) as tahun_pensiun'))
    //                         ->where('status_pensiun', 1)
    //                         ->groupBy('tanggal_pensiun','month')
    //                         ->pluck('tahun_pensiun','tanggal_pensiun')->all(); 
      
        // $count_karyawan = Karyawan::count();
        $count_pensiun = Pensiun::count();
        // return view('Home/home', compact('count_karyawan','count_pensiun'));

        // // $count_karyawan = DB::table('Karyawan')->count();
        // // $this->authorize('update', $user);
        $count_karyawan = Karyawan::all()->count();
        $url = 'home';

        $karyawans = Karyawan::all();
        $pangkats = Pangkat::all();
       	
        $i = 0;
        foreach ($pangkats as $pangkat) {
            $label_pangkats['label'][$i] = $pangkat->nama_pangkat;
            $label_pangkats['data'][$pangkat->nama_pangkat] = 0;
            foreach ($karyawans as $karyawan) {
                if ($pangkat->id == $karyawan->pangkat_id) {
                    $label_pangkats['data'][$pangkat->nama_pangkat] = $label_pangkats['data'][$pangkat->nama_pangkat]+1;
                }
            }
            $i++;
        }
            $label_pangkat = json_encode($label_pangkats['label']);
            $dataGrafik =json_encode($label_pangkats['data']);
            return view('Home/home', compact('url','count_karyawan','count_pensiun', 'pangkats','label_pangkats', 'label_pangkat', 'dataGrafik'));
        
        // return response()->json($label_pangkats);

    }

    public function GrafikPensiun() {
      

        return view('Home/home');
    }
    public function grafik(){
        $data_karyawan=Karyawan::get();
    }
}