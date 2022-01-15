<?php

namespace App\Http\Controllers\Menej_sdm\GradeJabatan;

use App\Http\Controllers\Controller;
use App\Models\Gradejabatan;
use Illuminate\Http\Request;

class GradeJabatanController extends Controller
{
 
    public function index()
    {
        $data_grade_jabatan=Gradejabatan::all();
        $url = 'add/grade_jabatan';
        return view('pages.admin.grade_jabatan.index',compact('data_grade_jabatan', 'url'));
    }

  
    public function create()
    {
        $url = 'save-grade-jabatan';
        $tombol = 'Add';
        return view('pages.admin.masterData.form.input-gradejabatan', compact('url', 'tombol'));
    }


    public function store(Request $request)
    {

        $valid_grade_jabatan = request()->validate([
            'grade_jabatan' => ['required', 'numeric']
        ]);

        Gradejabatan::create($valid_grade_jabatan);
        return redirect('/grade_jabatan');
    }


    public function show($id)
    {
        //
    }


    public function edit(Gradejabatan $gradejabatan)
    {
        $tombol = 'Update';
        $url = 'update/grade_jabatan/'.$gradejabatan->id;
        return view('pages.admin.masterData.form.input-gradejabatan', compact('gradejabatan', 'tombol', 'url'));
    }


    public function update(Request $request, Gradejabatan $gradejabatan)
    {
        $valid_grade_jabatan = request()->validate([
            'grade_jabatan' => ['required']
            ]);
        $gradejabatan->update($valid_grade_jabatan);
        return redirect('/grade_jabatan');
    }


    public function destroy(Gradejabatan $gradejabatan)
    {
        $gradejabatan->delete();
        return redirect('/grade_jabatan');
    }
}