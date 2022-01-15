<?php

namespace App\Http\Controllers\GrafikBatang;

use App\Http\Controllers\Controller;
use App\Models\{Karyawan,Unit,Level,Jabatan,Grade_jabatan};
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\DB;

class GrafikJabatanController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $param){
        // mendapatkan grade_jabatan pada salah satu unit kerja
       $data_karyawan = DB::table('karyawans')
            ->join('grade_jabatan','karyawans.id_grade_jabatan','=','grade_jabatan.id')
            ->join('jabatan','karyawans.id_jabatan','=','jabatan.id')
            ->select( 
                'karyawans.level_id',
                'karyawans.unit_kerja_id',
                'karyawans.full_name',
                'karyawans.np',
                'grade_jabatan.grade_jabatan',
                'jabatan.nama_jabatan',
                'karyawans.tanggal_lahir',
                'karyawans.tanggal_masuk',
                'karyawans.id_grade_jabatan',
                'karyawans.id_jabatan',
                'karyawans.tmt_jabatan',
                'karyawans.masa_jabatan')
                ->where('karyawans.unit_kerja_id', $param->id)
            ->get();
            $karyawan = collect($data_karyawan);
            $counted = $karyawan->countBy('id_jabatan');
            $counted->all();
            // return $data_karyawan;
            $data_jabatan = DB::table('karyawans')
                ->join('grade_jabatan','karyawans.id_grade_jabatan','=','grade_jabatan.id')
                ->join('jabatan','karyawans.id_jabatan','=','jabatan.id')
                ->select(
                    'karyawans.id_jabatan',
                    'grade_jabatan.grade_jabatan',
                    'jabatan.nama_jabatan')
                ->where('karyawans.unit_kerja_id',$param->id)
                ->get();
                // return $data_jabatan;
       $data_unit = Unit::all();
       $grade_jabatan =Grade_jabatan::all();

       $data=array();
       $i=0;
       foreach ($grade_jabatan as $grade) {
           $data['label'][$i] = $grade->grade_jabatan;
           $data['data'][$grade->grade_jabatan]=0;

           foreach ($data_karyawan as $karyawan) {
               if($grade->id == $karyawan->id_grade_jabatan){
                   $data['data'][$grade->grade_jabatan] = $data['data'][$grade->grade_jabatan]+1;
               }
           }
           $i++;
       }

        $label = json_encode($data['label']) ;
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

            //Tambah 56 tahun (Tanggal Pensiun)
            $date_pensiun = date_create($conf_format);
            date_add($date_pensiun, date_interval_create_from_date_string('56 years'));
            $array_pensiun[] =  date_format($date_pensiun, 'd-M-Y');

            //Tanggal Mpp
            $date_mpp = date('d-M-Y', strtotime('-3 months', strtotime($array_pensiun[$i])));
            $array_mpp[] = $date_mpp;
            
            $i++;
        }
            // return $new_format;
        return view('pages.admin.grafik.jabatan.index',compact('data_unit','label','dataGrafik','counted','data_karyawan','data_jabatan','date_now','new_format', 'array_pensiun', 'array_mpp'));
    }
}