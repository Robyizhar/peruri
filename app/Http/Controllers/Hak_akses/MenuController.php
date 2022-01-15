<?php

namespace App\Http\Controllers\Hak_akses;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_menu = Menu::get();
        return view('pages.admin.hak_akses.menu.index',compact('data_menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Menu();
        return view('pages.admin.hak_akses.menu.form',compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data= $request->all();
        $data['master_menu'] = $request->nama_menu;
        $model = Menu::create($data);
        return Response()->json($model);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $model = Menu::findOrFail($id);
        return view('pages.admin.hak_akses.menu.show',compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Menu::findOrFail($id);
          return view('pages.admin.hak_akses.menu.form',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        // $data['master_menu'] = $request->id;
        // return $data;   
        $item = Menu::findOrFail($id);
        $item->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $menu = Menu::findOrFail($id);
        // return Respon()->json($jabatan);
        $menu->delete();
        return redirect('jabatan')->withToastSuccess('Jabatan has deleted!');
    }

    public function dataTable(){
        $model=Menu::query()->latest();
         return DataTables::of($model)
            ->addColumn('Action', function ($model) {
                return view('layouts._action', [
                    'model' => $model,
                    'url_show' => route('menu.show', $model->id),
                    'url_edit' => route('menu.edit', $model->id),
                    'url_destroy' => route('menu.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['Action'])
            ->make(true);
    }
    
}
