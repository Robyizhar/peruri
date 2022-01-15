<?php

namespace App\Http\Controllers\Menej_sdm\Jabatan;

use App\Http\Controllers\Controller;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function __construct() { $this->middleware('auth'); }
    
    public function index(Request $request)
    {
        // $this->authorize('master_data', Jabatan::class);
        // $pangkat = Jabatan::all();
        // if ($request->ajax()) {
        //     return datatables()->of($pangkat)
        //     ->addColumn('action', function($data){
        //         $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="ti-pencil-alt"></i></a>';
        //         $button .= '&nbsp;&nbsp;';
        //         $button .= '&nbsp;&nbsp;';
        //         $button .= '<button  name="delete" id="'.$data->id.'"class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>';
        //         return $button;
        //     })
        //     ->rawColumns(['action','level'])
        //     ->addIndexColumn()
        //     ->make(true);
        // }
        $url = 'add/jabatan';
        $data_jabatan = Jabatan::all();
        return view('pages.admin.masterData.jabatan', compact('data_jabatan', 'url'));
        // return response()->json($pangkat);
        
    }


    public function create()
    {
        $url = 'save-jabatan';
        $tombol = 'Add';
        return view('pages.admin.masterData.form.edit', compact('url', 'tombol'));
    }


    public function store(Request $request)
    {
        $valid_jabatan = request()->validate([
            'kode_jabatan' => ['required'],
            'nama_jabatan' => ['required'],
        ]);

        Jabatan::create($valid_jabatan);
        return redirect('/jabatan');

        // $this->validate($request, [
        //     'input_data' => 'required|unique:jabatan,nama_jabatan'
        // ]);
        
        // $id = $request->id;
        // $post = Jabatan::updateOrCreate(['id' => $id],
        //             [ 'nama_jabatan' => $request->input_data ]);
        // return response()->json($post);

    }


    public function show(Jabatan $jabatan)
    {
        //
    }

    public function edit(Jabatan $jabatan)
    {
        // $where = array('id' => $id);
        // $post  = Jabatan::where($where)->first();
        // return response()->json($post);
        $tombol = 'Update';
        $url = 'update/jabatan/'.$jabatan->id;
        return view('pages.admin.masterData.form.edit', compact('jabatan', 'tombol', 'url'));
    }

 
    public function update(Request $request, Jabatan $jabatan)
    {
        // $post=Jabatan::findOrFail($id);
        // $data=$request->all();
        // $post->update($data);
        // return redirect('jabatan')->with('jabatan behasil di Update');
        // $update = [
        //     'kode_jabatan' => $request->kode,
        //     'nama_jabatan' => $request->name
        // ];
        
        // $jabatan->update($update);
        // $update = new Jabatan;
        // $update->kode_jabatan = $request->input('kode');
        // $update->nama_jabatan = $request->input('name');
        // $update->save();
        // return redirect('/jabatan');

        $valid_jabatan = request()->validate([
            'kode_jabatan' => ['required'],
            'nama_jabatan' => ['required'],
            ]);
        $jabatan->update($valid_jabatan);
        return redirect('/jabatan');

    }


    public function destroy(Jabatan $jabatan)
    {
        // $post = Jabatan::where('id',$id)->delete();
        // return response()->json($post);

        $jabatan->delete();
        return redirect('/jabatan');
    }
}