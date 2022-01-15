<?php

namespace App\Http\Controllers\GrafikBatang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Karyawan,Unit,Level,Jabatan,Grade_jabatan, Pangkat};
use Illuminate\Support\Facades\DB;

class GrafikPangkatController extends Controller
{
    public function index(Request $params){
    
    $karyawans_data = DB::table('karyawans')
        ->join('pangkats', 'karyawans.pangkat_id', '=', 'pangkats.id')
        ->join('jabatan','karyawans.id_jabatan','=','jabatan.id')
        ->select(
            'karyawans.pangkat_id',
            'karyawans.unit_kerja_id',
            'karyawans.full_name',
            'karyawans.np',
            'pangkats.nama_pangkat',
            'jabatan.nama_jabatan',
            'karyawans.tanggal_lahir',
            'karyawans.tanggal_masuk',
            'karyawans.id_jabatan',
            'karyawans.grade_pangkat',
            'karyawans.tmt_jabatan',
            'karyawans.masa_jabatan',
        )
        ->where('karyawans.unit_kerja_id', $params->id)
        ->get();
        // return $karyawans_data;
    $collect=collect($karyawans_data);
    $count = $collect->countBy('pangkat_id');
    $count->all();

    
    
    $pangkats_karyawan = DB::table('karyawans')
        ->join('pangkats','karyawans.pangkat_id','=','pangkats.id')
        ->select(
            'pangkats.nama_pangkat',
            'karyawans.pangkat_id'
        )
        ->where('karyawans.unit_kerja_id', $params->id)
        ->get();

        

        
    
    $pangkats = Pangkat::all();
    $data_unit = Unit::all();
    
    $data = array();
    $index = 0;
    foreach ($pangkats as $pangkat) {
        $data['label'][$index] = $pangkat->nama_pangkat;
        $data['data'][$pangkat->nama_pangkat] = 0;
        foreach ($karyawans_data as $karyawan) {
            if ($pangkat->id == $karyawan->pangkat_id) {
                $data['data'][$pangkat->nama_pangkat] = $data['data'][$pangkat->nama_pangkat]+1;
            }
        }
        $index++;
    }
 
    $label = json_encode($data['label']);
    $dataGrafik =json_encode($data['data']);
      $new_format = [];
        $array_pensiun = [];
        $array_mpp = [];
        $i = 0;
     foreach ($karyawans_data as $key) {
            //Tabggal Lahir
            $konversi = strtotime($key->tanggal_lahir);
            $conf_format = date('d-M-Y',$konversi);
            $new_format[] = $conf_format;

            //Tambah 56 tahun (Tanggal Pensiun)
            $date_pensiun = date_create($conf_format);
            date_add($date_pensiun, date_interval_create_from_date_string('56 years'));
            $array_pensiun[] =  date_format($date_pensiun, 'd-M-Y');

            //Tanggal Mpp
            $date_mpp = date('d-M-Y', strtotime('-3 months', strtotime($array_pensiun[$i])));
            $array_mpp[] = $date_mpp;
            
            $i++;
        }
    return view('pages.admin.grafik.pangkat.index', compact('karyawans_data', 'data_unit', 'label', 'dataGrafik', 'count', 'pangkats_karyawan','new_format', 'array_pensiun', 'array_mpp'));

    }
}