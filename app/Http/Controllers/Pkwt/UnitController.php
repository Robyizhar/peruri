<?php

namespace App\Http\Controllers\Pkwt;

use App\Http\Controllers\Controller;
use App\Models\Pkwt\UnitPkwt;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = 'unitPkwt';
        return view('pages.admin.master_pkwt.unit.index',compact('url'));
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
     * @param  \App\Models\Pkwt\UnitPkwt  $unitPkwt
     * @return \Illuminate\Http\Response
     */
    public function show(UnitPkwt $unitPkwt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pkwt\UnitPkwt  $unitPkwt
     * @return \Illuminate\Http\Response
     */
    public function edit(UnitPkwt $unitPkwt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pkwt\UnitPkwt  $unitPkwt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UnitPkwt $unitPkwt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pkwt\UnitPkwt  $unitPkwt
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnitPkwt $unitPkwt)
    {
        //
    }
}
