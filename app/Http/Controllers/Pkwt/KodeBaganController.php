<?php

namespace App\Http\Controllers\Pkwt;

use App\Http\Controllers\Controller;
use App\Models\Pkwt\KodeBagans;
use Illuminate\Http\Request;

class KodeBaganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = 'kodeBagan';
        return view('pages.admin.master_pkwt.KodeBagan.index',compact('url'));
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
     * @param  \App\Models\Pkwt\KodeBagans  $kodeBagans
     * @return \Illuminate\Http\Response
     */
    public function show(KodeBagans $kodeBagans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pkwt\KodeBagans  $kodeBagans
     * @return \Illuminate\Http\Response
     */
    public function edit(KodeBagans $kodeBagans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pkwt\KodeBagans  $kodeBagans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KodeBagans $kodeBagans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pkwt\KodeBagans  $kodeBagans
     * @return \Illuminate\Http\Response
     */
    public function destroy(KodeBagans $kodeBagans)
    {
        //
    }
}
