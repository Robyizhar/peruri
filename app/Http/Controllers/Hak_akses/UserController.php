<?php

namespace App\Http\Controllers\Hak_akses;

use App\Http\Controllers\Controller;
use App\Models\LevelUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_user = User::get();
        return view('pages.admin.hak_akses.user.index',compact('data_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new User();
        $data_admin = LevelUser::get();
        return view('pages.admin.hak_akses.user.form',compact('model','data_admin'));
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
        $data['password'] = bcrypt($request->password);
        $data['remember_token'] = Str::random(40);
        $model = User::create($data);
        return Response()->json($model);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model=User::findOrFail($id);
        return view('pages.admin.hak_akses.user.show',compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = User::findOrFail($id);
        $data_admin = LevelUser::get();
        return view('pages.admin.hak_akses.user.form',compact('model','data_admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = User::findOrFail($id);
        $item->update($data);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('Hak_akses/user')->withToastSuccess('Jabatan has deleted!');
    }

    public function dataTable(){
        $model = User::with('leveluser')->latest();
        return DataTables::of($model)
            ->addColumn('Action', function($model){
                return view('layouts._action',[
                    'model' => $model,
                    'url_show' => Route('user.show', $model->id),
                    'url_edit' => Route('user.edit', $model->id),
                    'url_destroy' => Route('user.destroy', $model->id)
                    ]); 
            })
        ->addIndexColumn()
        ->rawColumns(['Action'])
        ->make(true);
    }
}
