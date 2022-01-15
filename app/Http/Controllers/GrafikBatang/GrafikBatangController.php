<?php

namespace App\Http\Controllers\grafikBatang;

use App\Http\Controllers\Controller;
use App\Models\{Karyawan,Unit,Level,Jabatan};
use Illuminate\Http\Request;
use DateTime;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class GrafikBatangController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }

     public function index(Request $params){

        // untuk mendapatkan jumlah karyawan pada salah satu unit kerja dan setiap level
        $data_karyawan= DB::table('karyawans')
            ->join('levels', 'karyawans.level_id', '=', 'levels.id')
            ->join('jabatan','karyawans.id_jabatan','=','jabatan.id')
            ->select(
                'karyawans.level_id',
                'karyawans.unit_kerja_id',
                'karyawans.full_name',
                'karyawans.np',
                'jabatan.nama_jabatan',
                'levels.nama_level',
                'karyawans.tanggal_lahir',
                'karyawans.tanggal_masuk',
                'karyawans.tanggal_lahir',
                'karyawans.tanggal_mpp',
                'karyawans.id_jabatan',
                'karyawans.tmt_jabatan',
                'karyawans.masa_jabatan'

                // DB::raw('count(levels.nama_level) as jml_kryawan')

            )
            ->where('karyawans.unit_kerja_id', $params->id)
            ->get();
        $karyawan = collect($data_karyawan);
        // if ( !empty($karyawan) ) {
        //     echo "not nul";
        // } else {
        //     echo "null";
        // }
        // die;
        $counted = $karyawan->countBy('level_id');
        $counted->all();
        // return $counted;
       
        $level_jabatan = DB::table('karyawans')
            ->join('levels','karyawans.level_id','=','levels.id')
            ->select(
                'levels.nama_level',
                'karyawans.level_id'
                )
            ->where('karyawans.unit_kerja_id', $params->id)
            ->get();
        //    return $level_jabatan;    
        $unit=Unit::all();
        $data_level = Level::all();
       
        $data = array();
        $i = 0;  
        foreach ($data_level as $level ) {
           $data['label'][$i] = $level->nama_level; 
            $data['data'][$level->nama_level] = 0;
            foreach ($data_karyawan as $karyawan ) {
                if($level->id == $karyawan->level_id){
                    $data['data'][$level->nama_level] = $data['data'][$level->nama_level]+1;
                }
            } 
            $i++;
        }   
        
       

        $label = json_encode($data['label']);
        $dataGrafik =json_encode($data['data']);
        $date_now = new DateTime();

        $new_format = [];
        $array_pensiun = [];
        $array_mpp = [];
        $i = 0;
        foreach ($data_karyawan as $key) {
            //Tabggal Lahir
            $konversi = strtotime($key->tanggal_lahir);
            $conf_format = date('d-M-Y',$konversi);
            $new_format[] = $conf_format;
            // return $new_format;
            //Tambah 56 tahun (Tanggal Pensiun)
            $date_pensiun = date_create($conf_format);
            date_add($date_pensiun, date_interval_create_from_date_string('56 years'));
            $array_pensiun[] =  date_format($date_pensiun, 'd-M-Y');

            //Tanggal Mpp
            $date_mpp = date('d-M-Y', strtotime('-3 months', strtotime($array_pensiun[$i])));
            $array_mpp[] = $date_mpp;
            
            $i++;
        }
        
        // return $array_mpp;
        return view('pages.admin.grafik.level.index',compact('data_karyawan','unit','label','dataGrafik','counted','level_jabatan','date_now', 'new_format', 'array_pensiun', 'array_mpp', 'karyawan'));
           
    }

}