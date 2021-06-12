<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuti = DB::table('cuti')
        ->join('pegawai','pegawai.nik','=','cuti.nik')
        ->select('cuti.*', 'pegawai.nm_pegawai')
        ->get();
        return view('cuti.index',['cuti' => $cuti]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cuti.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_cuti=new \App\Cuti;
        $tambah_cuti->kd_cuti = $request->kdcuti;
        $tambah_cuti->nik = $request->nik;
        $tambah_cuti->jenis_pengajuan = $request->jcuti;
        $tambah_cuti->tgl_pengajuan = $request->tglawal;
        $tambah_cuti->tgl_akhir = $request->tglakhir;
        $tambah_cuti->total_cuti = $request->total;
        $tambah_cuti->cuti_diajukan = $request->cutipeng;
        $tambah_cuti->sisa_cuti = $request->sisa;
        $tambah_cuti->save();
        return redirect('/cuti');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cuti=\App\Cuti::find($id);
        return view('cuti.edit',['cuti' => $cuti]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update_cuti = \App\Cuti::findOrFail($id);
        $update_cuti->nik = $request->get('nik');
        $update_cuti->jenis_pengajuan = $request->get('jcuti');
        $update_cuti->tgl_pengajuan = $request->get('tglawal');
        $update_cuti->tgl_akhir = $request->get('tglakhir');
        $update_cuti->total_cuti = $request->get('total');
        $update_cuti->cuti_diajukan = $request->get('cutipeng');
        $update_cuti->sisa_cuti = $request->get('sisa');
        $update_cuti->save();
        return redirect()->route('cuti.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cuti=\App\Cuti::findOrFail($id);         
        $cuti->delete();           
        return redirect()->route('cuti.index');
    }
}
