<?php

namespace App\Http\Controllers\Menej_sdm\Pangkat;

use App\Http\Controllers\Controller;
use App\Models\Pangkat;
use Illuminate\Http\Request;

class PangkatController extends Controller
{
    public function __construct() { $this->middleware('auth'); }
    
    public function index(Request $request)
    {
        $data_pangkat=Pangkat::all();
        $url = 'add/pangkat';
        return view('pages.admin.pangkat.index',compact('data_pangkat', 'url'));
        // return response()->json($pangkat);
    }

    
    public function create()
    {
        $url = 'save-pangkat';
        $tombol = 'Add';
        return view('pages.admin.masterData.form.input-pangkat', compact('url', 'tombol'));
    }

    
    public function store(Request $request)
    {

        // $this->validate($request, [
        //     'input_data' => 'required|unique:pangkats,nama_pangkat'
        // ]);
        // $id = $request->id;

        // $post = Pangkat::updateOrCreate(['id' => $id],
        //             [ 'nama_pangkat' => $request->input_data ]);
        // return response()->json($post);

        $valid_pangkat = request()->validate([
            'nama_pangkat' => ['required']
        ]);

        Pangkat::create($valid_pangkat);
        return redirect('/pangkat');
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit(Pangkat $pangkat)
    {
        // $where = array('id' => $id);
        // $post  = Pangkat::where($where)->first();
        // return response()->json($post);

        $tombol = 'Update';
        $url = 'update/pangkat/'.$pangkat->id;
        return view('pages.admin.masterData.form.input-pangkat', compact('pangkat', 'tombol', 'url'));
    }

  
    public function update(Request $request, Pangkat $pangkat)
    {
        $valid_pangkat = request()->validate([
            'nama_pangkat' => ['required']
            ]);
        $pangkat->update($valid_pangkat);
        return redirect('/pangkat');
    }

  
    public function destroy(Pangkat $pangkat)
    {
        // $post = Pangkat::where('id',$id)->delete();
        // return response()->json($post);

        $pangkat->delete();
        return redirect('/pangkat');
    }
}