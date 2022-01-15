<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use App\Models\{Karyawan,Jabatan,Pangkat,Unit,Level,Grade_jabatan};
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class JabatanController extends Controller
{
        public function index()
    {
        $jabatan=Jabatan::latest()->get();
        // return $jabatan;
        return view('pages.admin.jabatan.index',compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Jabatan();
     
        return view('pages.admin.jabatan.form', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        $data = $request->all();
        // $data['slug'] = Str::slug($request->category_name);
        $model = Jabatan::create($data);

        return Response()->json($model);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jabatan  $Jabatan
     * @return \Illuminate\Http\Response
     */
    public function show(Jabatan $Jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jabatan  $Jabatan
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
    {
        $model = Jabatan::findOrFail($id);
        return view('pages.admin.jabatan.form', compact('model'));
    }

    // Processing Modal Edit Category
    public function update(Request $request, $id)
    {
        $data = $request->all();
        // $data['slug'] = Str::slug($request->category_name);
        $item = Jabatan::findOrFail($id);
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
        $jabatan = Jabatan::findOrFail($id);
        // return Respon()->json($jabatan);
        $jabatan->delete();
        return redirect('jabatan')->withToastSuccess('Jabatan has deleted!');
    }

    public function dataTable()
    {
        $model = Jabatan::query()->latest();
        // return $model;
        return DataTables::of($model)
            ->addColumn('Action', function ($model) {
                return view('layouts._action', [
                    'model' => $model,
                    'url_show' => route('jabatan.show', $model->id),
                    'url_edit' => route('jabatan.edit', $model->id),
                    'url_destroy' => route('jabatan.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['Action'])
            ->make(true);
    }
}
