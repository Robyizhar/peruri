<?php

namespace App\Http\Controllers\Pkwt;

use App\Http\Controllers\Controller;
use App\Models\Pkwt\NomorSp;
use Illuminate\Http\Request;

class NomorSpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = 'nomorSp';
        return view('pages.admin.master_pkwt.nomorSp.index',compact('url'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pkwt\NomorSp  $nomorSp
     * @return \Illuminate\Http\Response
     */
    public function show(NomorSp $nomorSp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pkwt\NomorSp  $nomorSp
     * @return \Illuminate\Http\Response
     */
    public function edit(NomorSp $nomorSp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pkwt\NomorSp  $nomorSp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NomorSp $nomorSp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pkwt\NomorSp  $nomorSp
     * @return \Illuminate\Http\Response
     */
    public function destroy(NomorSp $nomorSp)
    {
        //
    }
}
