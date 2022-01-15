<?php

namespace App\Http\Controllers\Karyawan;

use App\Http\Controllers\Controller;
use App\Models\{KaryawanPkwt,Unit};
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class KaryawanPkwtController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data_pkwt = KaryawanPkwt::with('unit')->latest()->get();
        return view('pages.admin.karyawanPkwt.index', compact('data_pkwt'));
    }


    public function create()
    {
        // return "test";
       $model = new KaryawanPkwt();
        $units = Unit::get();
        return view('pages.admin.karyawanPkwt.form',compact('model','units'));
    }


    public function store(Request $request)
    {
         $data = $request->all();
        // $data['slug'] = Str::slug($request->category_name);
        $model = KaryawanPkwt::create($data);

        return Response()->json($model);
    }

    public function detailTugas(){
    
        return view('pages.admin.karyawanPkwt.detailTugas');
    }


    public function show($id)
    {
        $model = KaryawanPkwt::findOrFail($id);
        $units = Unit::get();
        return view('pages.admin.karyawanPkwt.show',compact('model','units'));
    }


    public function edit($id)
    {
        $model = KaryawanPkwt::findOrFail($id);
        $units = Unit::get();
        return view('pages.admin.karyawanPkwt.form',compact('model','units'));
    }

    // Processing Modal Edit Category
    public function update(Request $request, $id)
    {
        $data = $request->all();
        // $data['slug'] = Str::slug($request->category_name);
        $item = KaryawanPkwt::findOrFail($id);
        $item->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jabatan  $Jabatan
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
        // return $id;
        $jabatan = KaryawanPkwt::findOrFail($id);
        // return Respon()->json($jabatan);
        $jabatan->delete();
        return redirect('karyawan/karyawanPkwt')->withToastSuccess('Jabatan has deleted!');
    }
    public function dataTable()
    {
        $model = KaryawanPkwt::query()->latest();
        // return $model;
        return DataTables::of($model)
            ->addColumn('Action', function ($model) {
                return view('layouts._action', [
                    'model' => $model,
                    'url_show' => route('karyawanPkwt.show', $model->id),
                    'url_edit' => route('karyawanPkwt.edit', $model->id),
                    'url_destroy' => route('karyawanPkwt.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['Action'])
            ->make(true);
    }
}