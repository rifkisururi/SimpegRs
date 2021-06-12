<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class RotasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rotasi = DB::table('rotasi')
        ->join('pegawai','pegawai.nik','=','rotasi.nik')
        ->select('rotasi.*', 'pegawai.nm_pegawai')
        ->get();
        return view('rotasi.index',['rotasi' => $rotasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rotasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_rotasi=new \App\Rotasi;
        $tambah_rotasi->kd_rotasi = $request->kdrotasi;
        $tambah_rotasi->nik = $request->nik;
        $tambah_rotasi->uk_sblm = $request->uksebelum;
        $tambah_rotasi->uk_sesudah = $request->uksesudah;
        $tambah_rotasi->save();
        return redirect('/rotasi');
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
        $rotasi=\App\Rotasi::find($id);
        return view('rotasi.edit',['rotasi' => $rotasi]);
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
        $update_rotasi = \App\Rotasi::findOrFail($id);
        $update_rotasi->nik = $request->get('nik');
        $update_rotasi->uk_sblm = $request->get('uksebelum');
        $update_rotasi->uk_sesudah = $request->get('uksesudah');
        $update_rotasi->save();
        return redirect()->route('rotasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rotasi=\App\Rotasi::findOrFail($id);         
        $rotasi->delete();           
        return redirect()->route('rotasi.index');
    }
}
