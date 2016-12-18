<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataKepegawaian extends Model
{
    protected $fillable = [
        'jabatan', 'golongan','status','pangkat','masa_kerja','pegawai_id'
    ];

    public function pegawais(){
        return $this->belongsTo('App\Pegawai');
    }
}
