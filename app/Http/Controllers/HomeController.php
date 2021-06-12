<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;

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
        $data['pria'] = Pegawai::where('j_kelamin', 'Laki-Laki')->get()->count();
        $data['perempuan'] = Pegawai::where('j_kelamin', 'Perempuan')->get()->count();
        return view('home', $data);
    }
}
