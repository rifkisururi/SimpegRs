<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    protected $primaryKey = 'kd_cuti';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = "cuti";
    protected $fillable=['kd_cuti','nik','tgl_pengajuan','jenis_pengajuan','total_cuti','cuti_diajukan','sisa_cuti','tgl_akhir'];
}
