<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rotasi extends Model
{
    protected $primaryKey = 'kd_rotasi';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = "rotasi";
    protected $fillable=['kd_rotasi','nik','uk_sblm','uk_sesudah'];
}
