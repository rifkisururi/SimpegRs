<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rencana extends Model
{
    protected $primaryKey = 'kd_program';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = "rencana_peng";
    protected $fillable=['kd_program','nik','program','volume','satuan','harga_satuan','jmlh','total'];
}

