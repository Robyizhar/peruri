<?php

namespace App\Http\Controllers\Grade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Karyawan,Unit,Level,Jabatan,Penilaian};
use Illuminate\Support\Facades\DB;

class GradeKaryawanController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $data_penilaian = Penilaian::with('Karyawan')->get();
        return view('pages.admin.gradeKaryawan.index',compact('data_penilaian'));
    }
    public function create() {
       
      
        $data_karyawan = Karyawan::get();
        $data_unit =Unit::get();
        return view('pages.admin.gradeKaryawan.add',compact('data_karyawan','data_unit'));
    }

      public function store(Request $request){
       
            $data = $request->all();
            
           
           $nilaiIjin = $request->nilai_ijin;
            $nilaiNki = $request->nilai; 
            $Sertifikasi = $request->sertifikasi_lsp;  

            $nilaiKedisiplinan = $request->nilai_kedisiplinan;
            if ($nilaiKedisiplinan >= 96 && $nilaiKedisiplinan <= 130) {
                $keyword = '-';
            }else{
                if ($nilaiKedisiplinan >= 91 && $nilaiKedisiplinan <= 95) {
                    $keyword = 'Ringan';
                } else {
                    if ($nilaiKedisiplinan >= 81 && $nilaiKedisiplinan <= 90) {
                    $keyword = 'Sedang';
                    }else {
                        if ($nilaiKedisiplinan >=0 && $nilaiKedisiplinan <= 80) {
                            $keyword = 'Berat';
                        }
                    }
                }
                
            }
           
            $nilaiKepatuhan = $request->nilai_kepatuhan;
            $nilaiSiapKerja =$request->nilai_sikapKerja;
            $nilaiInisiatif =$request->nilai_inisiatif;
            $keterangan = $request->keterangan_hukuman;

            if ($keterangan == null) {
               $keterangan = 'Tidak ada Hukuman';
            }
           
            $array = array($nilaiKedisiplinan,$nilaiKepatuhan, $nilaiSiapKerja, $nilaiInisiatif);
            $countNilai = count($array);
            $dataSum =  array_sum($array);
            $persentase = round($dataSum/$countNilai);
    

            // return $persentase;
            if ($nilaiNki == 'P4' || $nilaiIjin > 12 || $Sertifikasi == null || $persentase < 60) {
                $promosi= 1;
            }else {
                $promosi = 0;
            }
           
          
            $penilaian = new Penilaian();
            $penilaian->id_karyawan = $request->id_karyawan;
            $penilaian->nama_karyawan = $request->nama_karyawan;
            $penilaian->id_unitKerja = $request->id_unitKerja;
            $penilaian->sertifikasi_lsp = $request->sertifikasi_lsp;
            $penilaian->no = $request->no;
            $penilaian->nilai_kedisiplinan = $request->nilai_kedisiplinan;
            $penilaian->keterangan_hukuman = $keterangan;
            $penilaian->keyword = $keyword;
            $penilaian->nilai_kepatuhan = $request->nilai_kepatuhan;
            $penilaian->nilai_sikapKerja = $request->nilai_sikapKerja;
            $penilaian->nilai_inisiatif = $request->nilai_inisiatif;
            $penilaian->status_promosi = $promosi;
            $penilaian->persentase = $persentase;
            $penilaian->save();

        return redirect('/penilaianKaryawan')->with('success','Data Berhasil Di Simpan');
    }
    public function getName(Request $param){
        $data = DB::table('karyawans')
                    ->join('units', 'karyawans.unit_kerja_id', '=', 'units.id')
                    ->select('karyawans.full_name','units.unit_kerja','karyawans.unit_kerja_id')
                    ->where('karyawans.id',$param->id)
                    ->get();

        // $data = Karyawan::where('full_name','unit_kerja_id')->findOrFail($param->id);
        
       \Log::info($data);
        return response()->json(['data' => $data]);
    }


    
    public function edit($id){
        $Nilai_Nki = ['P1','P','P3','P4','P5']; 
        $tahunNki = ['2017','2018','2019','2018','2019','2020','2021','2022'];
        // $data_karyawan = Karyawan::findOrFail($id)->get();
        $data_penilaian = Penilaian::findOrFail($id);
      
        $data_karyawan = Karyawan::get();
        // return $data_karyawan;
        $data_unit = Unit::all();
        return view('pages.admin.gradeKaryawan.edit',compact('tahunNki','Nilai_Nki','data_unit','data_penilaian','data_karyawan'));
    }

    public function update(Request $request, $id){
        // return $request;
            $penilaian = Penilaian::findOrFail($id);

            $nilaiIjin = $request->nilai_ijin;
            $nilaiNki = $request->nilai; 
            $Sertifikasi = $request->sertifikasi_lsp;  

            $nilaiKedisiplinan = $request->nilai_kedisiplinan;
            if ($nilaiKedisiplinan >= 96 && $nilaiKedisiplinan <= 130) {
                $keyword = '-';
            }else{
                if ($nilaiKedisiplinan >= 91 && $nilaiKedisiplinan <= 95) {
                    $keyword = 'Ringan';
                } else {
                    if ($nilaiKedisiplinan >= 81 && $nilaiKedisiplinan <= 90) {
                    $keyword = 'Sedang';
                    }else {
                        if ($nilaiKedisiplinan >=0 && $nilaiKedisiplinan <= 80) {
                            $keyword = 'Berat';
                        }
                    }
                }
                
            }
           
            $nilaiKepatuhan = $request->nilai_kepatuhan;
            $nilaiSiapKerja =$request->nilai_sikapKerja;
            $nilaiInisiatif =$request->nilai_inisiatif;
            $keterangan = $request->keterangan_hukuman;

            if ($keterangan == null) {
               $keterangan = 'Tidak ada Hukuman';
            }
           
            $array = array($nilaiKedisiplinan,$nilaiKepatuhan, $nilaiSiapKerja, $nilaiInisiatif);
            $countNilai = count($array);
            $dataSum =  array_sum($array);
            $persentase = round($dataSum/$countNilai);
            // return $persentase;
            //  if ($nilaiKedisiplinan == 0) {
            //      $nilaiKedisiplinan = 100;
            //      $persentase = $persentase - $nilaiKedisiplinan;
            //     // return $persentase;
            // }else {
            //     if($nilaiKedisiplinan >=0 && $nilaiKedisiplinan <= 80){
            //         $persentase = $persentase - $nilaiKedisiplinan;
            //         // return 'tetttttt';
            //         // return $persentase;
            //     }
            // }

            // return $persentase;
            if ($nilaiNki == 'P4' || $nilaiIjin > 12 || $Sertifikasi == null || $persentase < 60) {
                $promosi= 1;
            }else {
                $promosi = 0;
            }

            // return 'test';
            // if ($persentase < 60) {
            //     $promosi = 1;
            // }else {
            //     $promosi = 0;
            // }

            // if ($promosi != 0) {
            //    return 'test';
            // }else{
            //     return 'kuyy';
            // }
            // return $promosi;
            $penilaian->id_karyawan = $request->id_karyawan;
            $penilaian->nama_karyawan = $request->nama_karyawan;
            $penilaian->id_unitKerja = $request->id_unitKerja;
            $penilaian->Tahun = $request->Tahun;
            $penilaian->nilai = $request->nilai;
            $penilaian->status_ijin = $request->status_ijin;
            $penilaian->nilai_ijin = $request->nilai_ijin;
            $penilaian->sertifikasi_lsp = $request->sertifikasi_lsp;
            $penilaian->no = $request->no;
            $penilaian->nilai_kedisiplinan = $request->nilai_kedisiplinan;
            $penilaian->keterangan_hukuman = $keterangan;
            $penilaian->keyword = $keyword;
            $penilaian->nilai_kepatuhan = $request->nilai_kepatuhan;
            $penilaian->nilai_sikapKerja = $request->nilai_sikapKerja;
            $penilaian->nilai_inisiatif = $request->nilai_inisiatif;
            $penilaian->status_promosi = $promosi;
            $penilaian->persentase = $persentase;
            $penilaian->update();
        //  return $penilaian;
       
        return redirect('penilaianKaryawan')->with('success','Data berhasil di Update');
    }

     public function destroy($id)
    {
        $data_karyawan = Penilaian::findOrFail($id);
        $data_karyawan->delete();
        return redirect('penilaianKaryawan')->with('success','Data berhasil di Hapus');
    }
}
