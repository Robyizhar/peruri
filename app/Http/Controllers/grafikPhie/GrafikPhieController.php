<?php

namespace App\Http\Controllers\grafikPhie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GrafikPhieController extends Controller
{
    public function index(){
        $url = 'grafik_pie';
        return view('pages.admin.grafik.grafikPhie', compact('url'));
    }
}