<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PimpinanCabang;
use App\Models\Anggota;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');

        //data pc
        $data = PimpinanCabang::orderBy('pc_nama', 'ASC')->get();        
        $pc = PimpinanCabang::count();

        //data anggota
        // Post::orderBy('id', 'DESC')->get();
        $anggota = Anggota::orderBy('nama', 'ASC')->get();
        $jml_anggota = Anggota::count();

        return view('index', compact('data', 'pc', 'anggota', 'jml_anggota'));
    }
}
