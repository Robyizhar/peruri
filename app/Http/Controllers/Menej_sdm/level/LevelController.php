<?php

namespace App\Http\Controllers\Menej_sdm\level;

use App\Http\Controllers\Controller;
use App\Models\Level;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $data_level = Level::all();
        return view('pages.admin.level.index', compact('data_level'));
    }



    public function create()
    {
        $url = 'save-level';
        $tombol = 'Add';
        return view('pages.admin.masterData.form.input-level', compact('url', 'tombol'));
    }


    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'input_data' => 'required|unique:levels,level'
        // ]);
        // $id = $request->id;

        // $post = Level::updateOrCreate(['id' => $id],
        //             [ 'level' => $request->input_data ]);
        // return response()->json($post);
        $valid_level = request()->validate([
            'nama_level' => ['required']
        ]);

        Level::create($valid_level);
        return redirect('/level');
    }


    public function show(level $level)
    {
        //
    }


    public function edit(Level $level)
    {
        // $where = array('id' => $id);
        // $post  = Level::where($where)->first();
        // return response()->json($post);

        $tombol = 'Update';
        $url = 'update/level/'.$level->id;
        return view('pages.admin.masterData.form.input-level', compact('level', 'tombol', 'url'));
    }


    public function update(Request $request, level $level)
    {
        $valid_level = request()->validate([
            'nama_level' => ['required']
            ]);
        $level->update($valid_level);
        return redirect('/level');
    }


    

    public function destroy(Level $level)
    {
        // $post = Level::where('id',$id)->delete();
        // return response()->json($post);

        $level->delete();
        return redirect('/level');
    }
}