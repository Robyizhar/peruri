<?php

namespace App\Http\Controllers\Karyawan;

use App\Http\Controllers\Controller;
use App\Models\{Karyawan,Jabatan,Pangkat,Unit,Level,Grade_jabatan};
use App\Models\Position\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Karyawan\KaryawanOrganikRequest;


class KaryawanController extends Controller
{
   

    public function __construct()
    {
   
        $this->middleware('auth');
        // $this->karyawanService = $ServiceKaryawanServices;
    }

  
    
    public function index()
    {
      
        $data_karyawan=Karyawan::with('penilaianKaryawan')->get();
        // return $data_karyawan;

        $promosi = 'Harus dipromosikan';
        $date_now = new DateTime();
        $date_now_parse = Carbon::parse($date_now)->format('d-M-Y');
        $new_format = [];
        $array_pensiun = [];
        $array_mpp = [];
        $oneYears = [];
        $i = 0;
        foreach ($data_karyawan as $key) {
            //Tabggal Lahir
            $konversi = strtotime($key->tanggal_lahir);
            $conf_format = date('d-M-Y',$konversi);
            $new_format[] = $conf_format;

            $date_pensiun = date_create($conf_format);
            date_add($date_pensiun, date_interval_create_from_date_string('56 years'));
            $array_pensiun[] =  date_format($date_pensiun, 'd-M-Y');


            //Tanggal Mpp
            $date_mpp = date('d-M-Y', strtotime('-3 months', strtotime($array_pensiun[$i])));
            $array_mpp[] = $date_mpp;

            //One year before retire from work
            $oneYear = date('d-M-Y', strtotime('-1 years', strtotime($array_pensiun[$i])));
            $oneYear_parse = Carbon::parse($oneYear)->format('d-M-Y');
            $oneYears[] = $oneYear_parse;
            
          

            $i++;

        }
       
        return view('pages.admin.karyawanOrganik.index', compact('data_karyawan', 'date_now', 'promosi', 'new_format', 'array_pensiun', 'array_mpp', 'oneYears', 'date_now_parse'));

    }
    
    public function create()
    {
       
        $jabatans = Jabatan::all();
        $data_level = Level::all();
        $pangkats = Pangkat::all();
        $units = Unit::all();
        $gradeJabatan= Grade_jabatan::all();
        return view('pages.admin.karyawanOrganik.add',compact('jabatans','pangkats','units','gradeJabatan','data_level'));
    }
    public function store(KaryawanOrganikRequest $request)
    {     

        $data = new Karyawan();// $test=Carbon::parse($request->tmt_jabatan);
        $tglLahir = $request->tanggal_lahir;

       
           
            $konversi = strtotime($tglLahir);
            $conf_format = date('d-M-Y',$konversi);
            $new_format = $conf_format;
            // return $new_format;
            
            //Tambah 56 tahun (Tanggal Pensiun)
            $date_pensiun = date_create($conf_format);
            date_add($date_pensiun, date_interval_create_from_date_string('56 years'));
            $array_pensiun =  date_format($date_pensiun, 'd-M-Y');
            // return $array_pensiun;

            $date_mpp = date('d-M-Y', strtotime('-3 months', strtotime($array_pensiun)));
            $array_mpp= $date_mpp;

           

            $oneYear = date('d-M-Y', strtotime('-1 years', strtotime($array_pensiun)));
            $oneYear_parse = Carbon::parse($oneYear)->format('d-M-Y');
            $oneYears= $oneYear_parse;
          
            $dateNow = date('d-M-Y');

            if($dateNow == $array_pensiun ){
                $status= 1; //sudah pensiun
            }else{
                $status= 0; //blum pensiun
            }


            $data->np = $request->np;
            $data->full_name = $request->full_name;
            $data->tanggal_lahir = $request->tanggal_lahir;
            $data->tanggal_masuk = $request->tanggal_masuk;
            $data->tanggal_mpp =$array_mpp;
            $data->tanggal_pensiun = $array_pensiun;
            $data->status_pensiun = $status;
            $data->id_jabatan = $request->id_jabatan;
            $data->unit_kerja_id = $request->unit_kerja_id;
            $data->pangkat_id = $request->pangkat_id;
            $data->id_grade_jabatan = $request->id_grade_jabatan;
            $data->level_id = $request->level_id;
            $data->tmt_jabatan = Carbon::parse($request->tmt_jabatan);
            $data->grade_pangkat = $request->grade_pangkat;
            $data->save();

        return redirect('karyawan/show')->with('success','Data Berhasil Di Simpan');
    }
    public function edit($id)
    {
      
        $karyawan=Karyawan::findOrFail($id);
        // return $karyawan;
        $jabatans = Jabatan::all();
        $data_level = Level::all();
        $pangkats = Pangkat::all();
        $units = Unit::all();
         $gradeJabatan= Grade_jabatan::all();
        return view('pages.admin.KaryawanOrganik.edit', compact('units','karyawan','jabatans','pangkats','jabatans','data_level','gradeJabatan'));

   

    }
    public function update(KaryawanOrganikRequest $request, $id)
    {  
        $karyawan = Karyawan::findOrFail($id);
            $tglLahir = $request->tanggal_lahir;
            $konversi = strtotime($tglLahir);
            $conf_format = date('d-M-Y',$konversi);
            $new_format = $conf_format;
            // return $new_format;
            
            //Tambah 56 tahun (Tanggal Pensiun)
            $date_pensiun = date_create($conf_format);
            date_add($date_pensiun, date_interval_create_from_date_string('56 years'));
            $array_pensiun =  date_format($date_pensiun, 'd-M-Y');
            // return $array_pensiun;
         

            $date_mpp = date('d-M-Y', strtotime('-3 months', strtotime($array_pensiun)));
            $array_mpp= $date_mpp;

            // return $array_mp;
         $karyawan->update([
            'np' => $request['np'],
            'full_name' => $request['full_name'],
            'tanggal_lahir' => $request['tanggal_lahir'],
            'tanggal_masuk' => $request['tanggal_masuk'],
            'tanggal_mpp' =>  $array_mpp,
            'tanggal_pensiun' => $array_pensiun,
            'id_jabatan' => $request['id_jabatan'],
            'unit_kerja_id' => $request['unit_kerja_id'],
            'pangkat_id' => $request['pangkat_id'],
            'id_grade_jabatan' => $request['id_grade_jabatan'],
            'level_id' => $request['level_id'],
            'tmt_jabatan' => Carbon::parse($request['tmt_jabatan']),
            'grade_pangkat' => $request['grade_pangkat']
         ]);
       
        return redirect('karyawan/show')->with('success','Data berhasil di Update');
    }
    public function destroy($id)
    {
        $data_karyawan = Karyawan::findOrFail($id);
        $data_karyawan->delete();
        return redirect('karyawan/show')->with('success','Data berhasil di Hapus');
    }
}