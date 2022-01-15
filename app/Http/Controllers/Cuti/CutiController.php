<?php

namespace App\Http\Controllers\Cuti;

use App\Http\Controllers\Controller;
use App\Models\Cuti;
use Illuminate\Http\Request;
use App\Services\Interfaces\CutiKaryawanServiceInterface;

class CutiController extends Controller
{
    private $cutiKaryawan;

    public function __construct(CutiKaryawanServiceInterface $cutiKaryawan)
    {
       $this->cutiKaryawan = $cutiKaryawan; 
    }

    public function index(Request $request)
    {
        $data = $this->cutiKaryawan->getAll();
        return view('pages.admin.cuti.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $button = 'add Cuti';
        $model = $this->cutiKaryawan->create();
        $data_karyawan = $this->cutiKaryawan->getAllKaryawan();
        return view('pages.admin.cuti.form', compact('model','button','data_karyawan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        try {
            $this->cutiKaryawan->save($request);
            return redirect('cuti')->with('success', ' data berhasil di simpan');
        } catch (\Throwable $th) {
             return back()->with('failed', 'Create user failed. Please try again');
        }
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function show(Cuti $cuti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuti $cuti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuti $cuti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuti $cuti)
    {
        //
    }
}
