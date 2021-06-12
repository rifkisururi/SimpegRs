<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class RencanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rencana = DB::table('rencana_peng')
        ->join('pegawai','pegawai.nik','=','rencana_peng.nik')
        ->select('rencana_peng.*', 'pegawai.nm_pegawai')
        ->get();
        return view('rencana.index',['rencana_peng' => $rencana]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rencana.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_rencana=new \App\rencana;
        $tambah_rencana->kd_program = $request->kdprog;
        $tambah_rencana->nik = $request->nik;
        $tambah_rencana->program = $request->program;
        $tambah_rencana->volume = $request->volume;
        $tambah_rencana->satuan = $request->satuan;
        $tambah_rencana->harga_satuan = $request->harga;
        $tambah_rencana->jmlh = $request->jmlh;
        $tambah_rencana->save();
        return redirect('/rencana_peng');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rencana=\App\Rencana::find($id);
        return view('rencana.edit',['rencana_peng' => $rencana]);
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
        $update_rencana = \App\Rencana::findOrFail($id);
        $update_rencana->nik = $request->get('nik');
        $update_rencana->program = $request->get('program');
        $update_rencana->volume = $request->get('volume');
        $update_rencana->satuan = $request->get('satuan');
        $update_rencana->harga_satuan = $request->get('harga');
        $update_rencana->jmlh = $request->get('jmlh');
        $update_rencana->save();
        return redirect()->route('rencana.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rencana=\App\Rencana::findOrFail($id);         
        $rencana->delete();           
        return redirect()->route('rencana.index');
    }
}
