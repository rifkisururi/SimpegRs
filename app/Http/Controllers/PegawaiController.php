<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai=\App\Pegawai::All();
        return view('pegawai.index',['pegawai' => $pegawai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_pegawai=new \App\Pegawai;
        $tambah_pegawai->nik = $request->nik;
        $tambah_pegawai->nm_pegawai = $request->nama;
        $tambah_pegawai->j_kelamin = $request->jkelamin;
        $tambah_pegawai->jenis_tenaga = $request->jtenaga;
        $tambah_pegawai->unit_kerja = $request->unitkerja;
        $tambah_pegawai->jbtn_skrng = $request->jbtn;
        $tambah_pegawai->st_pegawai = $request->stpegawai;
        $tambah_pegawai->alamat = $request->alamat;
        $tambah_pegawai->no_telp = $request->telp;
        $tambah_pegawai->tempat_lhr = $request->tempatlhr;
        $tambah_pegawai->tgl_lhr = $request->tgllhr;
        $tambah_pegawai->pend_terakhir = $request->pend;
        $tambah_pegawai->tahun_lulus = $request->thnlulus;
        $tambah_pegawai->save();
        return redirect('/pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pegawai=\App\Pegawai::find($id);
        return view('pegawai.view',['pegawai' => $pegawai]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawai=\App\Pegawai::find($id);
        return view('pegawai.edit',['pegawai' => $pegawai]);
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
        $update_pegawai = \App\Pegawai::findOrFail($id);  
        $update_pegawai->nm_pegawai=$request->get('nama');         
        $update_pegawai->j_kelamin=$request->get('jkelamin');           
        $update_pegawai->jenis_tenaga = $request->get('jtenaga');
        $update_pegawai->unit_kerja = $request->get('unitkerja');
        $update_pegawai->jbtn_skrng = $request->get('jbtn');
        $update_pegawai->st_pegawai = $request->get('stpegawai');
        $update_pegawai->alamat = $request->get('alamat');
        $update_pegawai->no_telp = $request->get('telp');
        $update_pegawai->tempat_lhr = $request->get('tempatlhr');
        $update_pegawai->tgl_lhr = $request->get('tgllhr');
        $update_pegawai->pend_terakhir = $request->get('pend');
        $update_pegawai->tahun_lulus = $request->get('thnlulus');
        $update_pegawai->save();               
        return redirect()->route('pegawai.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai=\App\Pegawai::findOrFail($id);         
        $pegawai->delete();           
        return redirect()->route('pegawai.index'); 
    }

    public function getpegawai($id)
    {
        try {
            $pegawai=\App\Pegawai::find($id);
            if(isset($pegawai->nik)){
                return response()->json(['msg' => '1', 'data' => $pegawai]);
            } else {
                return response()->json(['msg' => '0', 'data' => 'error']);
            }
        } catch (Exception $e) {
            return response()->json(['msg' => '0','data' => $e]);
        }
    }
}
