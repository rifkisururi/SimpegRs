<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perjadin extends Model
{
    protected $primaryKey = 'kd_perjadin';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = "perjadin";
    protected $fillable=['kd_perjadin','nik','tgl_berangkat','tgl_pulang','tempat_dinas','alsn_perjadin'];
}
