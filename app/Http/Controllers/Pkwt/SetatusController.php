<?php

namespace App\Http\Controllers\Pkwt;

use App\Http\Controllers\Controller;
use App\Models\Pkwt\Setatus;
use Illuminate\Http\Request;

class SetatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = 'statusPkwt';
        return view('pages.admin.master_pkwt.status.index',compact('url'));
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
     * @param  \App\Models\Pkwt\Setatus  $setatus
     * @return \Illuminate\Http\Response
     */
    public function show(Setatus $setatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pkwt\Setatus  $setatus
     * @return \Illuminate\Http\Response
     */
    public function edit(Setatus $setatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pkwt\Setatus  $setatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setatus $setatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pkwt\Setatus  $setatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setatus $setatus)
    {
        //
    }
}
