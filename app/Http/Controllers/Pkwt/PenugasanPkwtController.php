<?php

namespace App\Http\Controllers\Pkwt;

use App\Http\Controllers\Controller;
use App\Models\PenugasanPkwt;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PenugasanPkwtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penugasan=PenugasanPkwt::all();
        return view('pages.admin.karyawanPkwt.penugasan.index',compact('penugasan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new PenugasanPkwt();
        return view('pages.admin.karyawanPkwt.penugasan.form', compact('model'));
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
        $model = PenugasanPkwt::create($data);

        return $model;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PenugasanPkwt  $penugasanPkwt
     * @return \Illuminate\Http\Response
     */
    public function show(PenugasanPkwt $penugasanPkwt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PenugasanPkwt  $penugasanPkwt
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
    {
        $model = PenugasanPkwt::findOrFail($id);
        return view('pages.admin.karyawanPkwt.penugasan.form', compact('model'));
    }

    // Processing Modal Edit Category
    public function update(Request $request, $id)
    {
        $data = $request->all();
        // $data['slug'] = Str::slug($request->category_name);
        $item = PenugasanPkwt::findOrFail($id);
        $item->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PenugasanPkwt  $penugasanPkwt
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
        $category = PenugasanPkwt::findOrFail($id);
        $category->delete();
    }

    public function dataTable()
    {
        $model = PenugasanPkwt::query()->latest();
        return DataTables::of($model)
            ->addColumn('Action', function ($model) {
                return view('layouts._action', [
                    'model' => $model,
                    'url_show' => route('PenugasanPkwt.show', $model->id),
                    'url_edit' => route('PenugasanPkwt.edit', $model->id),
                    'url_destroy' => route('PenugasanPkwt.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['Action'])
            ->make(true);
    }
}
