<?php

namespace App\Http\Controllers\Hak_akses;

use App\Http\Controllers\Controller;
use App\Models\AksesUser;
use App\Models\LevelUser;
use App\Models\Menu;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AksesUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $dataAkses_user=AksesUser::get();
       return view('pages.admin.hak_akses.akses.index',compact('dataAkses_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new AksesUser();
        $data_leveluser = LevelUser::get();
        $data_menu = Menu::get();
        return view('pages.admin.hak_akses.akses.form',compact('model','data_leveluser','data_menu'));
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
        $model = AksesUser::create($data);
        return Response()->json($model);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AksesUser  $aksesUser
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Menu::findOrFail($id);
        $data_leveluser = LevelUser::get();
        $data_menu = Menu::get();
        return view('pages.admin.hak_akses.akses.show',compact('model','data_leveluser','data_menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AksesUser  $aksesUser
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Menu::findOrFail($id);
        $data_leveluser = LevelUser::get();
        $data_menu = Menu::get();
        return view('pages.admin.hak_akses.akses.form',compact('model','data_leveluser','data_menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AksesUser  $aksesUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = AksesUser::findOrFail($id);
        $item->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AksesUser  $aksesUser
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aksesUser = AksesUser::findOrFail($id);
        $aksesUser->delete();
        return redirect('Hak_akses/akses')->withToastSuccess('Hak akses has deleted!');
    }

    public function dataTable(){
        $model=AksesUser::with('menu','leveluser')->latest();
         return DataTables::of($model)
            ->addColumn('Action', function ($model) {
                return view('layouts._action', [
                    'model' => $model,
                    'url_show' => route('akses.show', $model->id),
                    'url_edit' => route('akses.edit', $model->id),
                    'url_destroy' => route('akses.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['Action'])
            ->make(true);
    }
}
