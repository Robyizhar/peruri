<?php 

namespace App\Services;

use App\Models\Karyawan;
use App\Models\Nilainki;
use App\Services\Interfaces\NilainkiServicesInterfaces;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\DataTables;

class NilainkiServices implements NilainkiServicesInterfaces
{
    private $karyawanNilaiNki, $NilaiNki;

    public function __construct(Karyawan $karyawanNilaiNki, Nilainki $NilaiNki)
    {
        $this->karyawanNilaiNki = $karyawanNilaiNki;
        $this->NilaiNki=$NilaiNki;
    }

    public function getAllNilaiNki()
    {
        return $this->NilaiNki->with('Karyawan')->get();
    }
    
    public function getAllKaryawan() 
    {
        return $this->karyawanNilaiNki->all();
    }

    public function create()
    {
        return $this->NilaiNki = new Nilainki();
    }

    public function dataTable()
    {
        $model = Nilainki::with('Karyawan')->get();
        // return $model;
        return DataTables::of($model)
            ->addColumn('Action', function ($model) {
                return view('layouts._action', [
                    'model' => $model,
                    'url_show' => route('nilainki.show', $model->id),
                    'url_edit' => route('nilainki.edit', $model->id),
                    'url_destroy' => route('nilainki.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['Action'])
            ->make(true);
    }

    public function saveNki($value){
        return $this->NilaiNki->create([
            'id_karyawan' => $value['id_karyawan'],
            'tahun' => $value['tahun'],
            'nilai_nki' => $value['nilai_nki']
        ]);
    }

    public function edit($id)
    {
        return $this->NilaiNki->findOrFail($id);
    }

    public function updateNKI($request,$id)
    {
        $data = $request->all();
        $item = NilaiNki::findOrFail($id);
        $item->update($data);
        
    }

    public function deleteNki($id){
        $data= $this->NilaiNki->findOrFail($id);
        $data->delete();
    }

}
