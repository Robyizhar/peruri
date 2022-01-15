<?php

namespace App\Http\Controllers\Hak_akses;

use App\Http\Controllers\Controller;
use App\Models\LevelUser;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class LevelUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_level = LevelUser::get();
        // return $data_level;
        return view('pages.admin.hak_akses.levelUser.index',compact('data_level'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model =new LevelUser();
        return view('pages.admin.hak_akses.levelUser.form',compact('model'));
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
        $model = LevelUser::create($data);

        return Response()->json($model);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LevelUser  $levelUser
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LevelUser  $levelUser
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = LevelUser::findOrFail($id);
         return view('pages.admin.hak_akses.levelUser.form',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LevelUser  $levelUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = LevelUser::findOrFail($id);
        $item->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LevelUser  $levelUser
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $level = LevelUser::findOrFail($id);
        $level->delete();
        return redirect('Hak_akses/levelUser')->withToastSuccess('Level has deleted!');
    }

    public function dataTable(){
        $model=LevelUser::query()->latest();
         return DataTables::of($model)
            ->addColumn('Action', function ($model) {
                return view('layouts._action', [
                    'model' => $model,
                    'url_show' => route('levelUser.show', $model->id),
                    'url_edit' => route('levelUser.edit', $model->id),
                    'url_destroy' => route('levelUser.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['Action'])
            ->make(true);
    }
}
