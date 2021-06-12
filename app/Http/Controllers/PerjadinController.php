<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PerjadinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perjadin = DB::table('perjadin')
        ->join('pegawai','pegawai.nik','=','perjadin.nik')
        ->select('perjadin.*', 'pegawai.nm_pegawai', 'pegawai.unit_kerja')
        ->get();
        return view('perjadin.index',['perjadin' => $perjadin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perjadin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 'berhasil';
        $tambah_perjadin=new \App\Perjadin;
        $tambah_perjadin->kd_perjadin = $request->kdperjadin;
        $tambah_perjadin->nik = $request->nik;
        $tambah_perjadin->tgl_berangkat = $request->tglberangkat;
        $tambah_perjadin->tgl_pulang = $request->tglplg;
        $tambah_perjadin->tempat_dinas = $request->tempat;
        $tambah_perjadin->alsn_perjadin = $request->acara;
        $tambah_perjadin->save();
        return redirect('/perjadin');
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
        $perjadin=\App\Perjadin::find($id);
        return view('perjadin.edit',['perjadin' => $perjadin]);
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
        $update_perjadin = \App\Perjadin::findOrFail($id);
        $update_perjadin->nik = $request->get('nik');
        $update_perjadin->tgl_berangkat = $request->get('tglberangkat');
        $update_perjadin->tgl_pulang = $request->get('tglplg');
        $update_perjadin->tempat_dinas = $request->get('tempat');
        $update_perjadin->alsn_perjadin = $request->get('acara');
        $update_perjadin->save();
        return redirect()->route('perjadin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perjadin=\App\Perjadin::findOrFail($id);         
        $perjadin->delete();           
        return redirect()->route('perjadin.index');
    }
}
