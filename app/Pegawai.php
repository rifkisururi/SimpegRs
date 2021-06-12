<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $primaryKey = 'nik';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = "pegawai";
    protected $fillable=['nik','nm_pegawai','j_kelamin','jenis_tenaga','unit_kerja','jbtn_skrng','jbtn_baru','tgl_kenaikan','alsn_jbtn','st_pegawai','alamat','no_telp','tempat_lhr','tgl_lhr','pend_terakhir','tahun_lulus'];
}