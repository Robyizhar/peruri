<?php

namespace App\Http\Controllers\Nilainki;

use App\Http\Controllers\Controller;
use App\Models\Nilainki;
use Illuminate\Http\Request;
use App\Services\NilainkiServices;
use App\Services\Interfaces\NilainkiServicesInterfaces;
use PhpParser\Node\Stmt\TryCatch;

class NilainkiController extends Controller
{
    private $NilainkikaryawanService;

    public function __construct(NilainkiServicesInterfaces $NilainkikaryawanService)
    {
        $this->NilainkikaryawanService = $NilainkikaryawanService;
    }

    public function index(Request $request)
    {
        $data['karyawan'] = $this->NilainkikaryawanService->getAllKaryawan($request);
        $data['nilaiNki']=$this->NilainkikaryawanService->getAllNilaiNki($request);
        // return $data['karyawan'];
       
        // return $data;
       return view('pages.admin.nilai_nki.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = $this->NilainkikaryawanService->create();
        $npKaryawan = $this->NilainkikaryawanService->getAllKaryawan();
        return view('pages.admin.nilai_nki.form',compact('model','npKaryawan','namaKaryawan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->NilainkikaryawanService->saveNki($request);
        try {
             return redirect('nilainki')->with('success', 'Create user successfully');
        } catch (\Throwable $th) {
             return back()->with('failed', 'Create user failed. Please try again');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nilainki  $nilainki
     * @return \Illuminate\Http\Response
     */
    public function show(Nilainki $nilainki)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nilainki  $nilainki
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = $this->NilainkikaryawanService->edit($id);
        $npKaryawan = $this->NilainkikaryawanService->getAllKaryawan();

        return view('pages.admin.nilai_nki.form', compact('model','npKaryawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nilainki  $nilainki
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // return $request;
        try {
            return $this->NilainkikaryawanService->updateNKI($request, $id);
        } catch (\Throwable $th) {
            return back()->with('failed', 'Create user failed. Please try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nilainki  $nilainki
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->NilainkikaryawanService->deleteNki($id);
         return redirect('nilainki')->with('success', 'Create user successfully');
    }

    public function dataTable(){
        return $this->NilainkikaryawanService->dataTable();
    }
}
