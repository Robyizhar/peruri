<?php

namespace App\Http\Controllers\Menej_sdm\Unit;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    
    public function index(Request $request)
    {
        // $this->authorize('master_data', Unit::class);
        // $unit = Unit::all();
        // if ($request->ajax()) {
        //     return datatables()->of($unit)
        //     ->addColumn('action', function($data){
        //         $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="ti-pencil-alt"></i></a>';
        //         $button .= '&nbsp;&nbsp;';
        //         $button .= '&nbsp;&nbsp;';
        //         $button .= '<button  name="delete" id="'.$data->id.'"class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>';
        //         return $button;
        //     })
        //     ->rawColumns(['action'])
        //     ->addIndexColumn()
        //     ->make(true);
        // }
        // $url = 'unit';
        $url = 'add/unit';
        $data_unit = Unit::all();
        return view('pages.admin.unit.index',compact('data_unit', 'url'));
        // return response()->json($unit);
    }


    public function create()
    {
        $url = 'save-unit';
        $tombol = 'Add';
        return view('pages.admin.masterData.form.input-unit', compact('url', 'tombol'));
    }

 
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'input_data' => 'required|unique:units,unit_kerja'
        // ]);
        // $id = $request->id;

        // $post = Unit::updateOrCreate(['id' => $id],
        //             [ 'unit_kerja' => $request->input_data ]);
        // return response()->json($post);

        $valid_unit = request()->validate([
            'kode_unit' => ['required'],
            'unit_kerja' => ['required'],
        ]);
        Unit::create($valid_unit);
        return redirect('/unit');
    }

  
    public function show($id)
    {
        //
    }

  
    public function edit(Unit $unit)
    {
        // $where = array('id' => $id);
        // $post  = Unit::where($where)->first();
        // return response()->json($post);

        $url = 'update/unit/'.$unit->id;
        $tombol = 'Update';
        return view('pages.admin.masterData.form.input-unit', compact('unit', 'url', 'tombol'));
    }

   
    public function update(Request $request, Unit $unit)
    {
        $valid_unit = request()->validate([
            'kode_unit' => ['required'],
            'unit_kerja' => ['required'],
            ]);
        $unit->update($valid_unit);
        return redirect('/unit');
    }

    public function destroy(Unit $unit)
    {
        // $unit = Unit::where('id',$id)->delete();
        // return response()->json($unit);
        $unit->delete();
        return redirect('/unit');
    }
}