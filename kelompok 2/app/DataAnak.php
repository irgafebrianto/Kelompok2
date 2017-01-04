<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataAnak extends Model
{
    protected $fillable = [
        'nama_anak', 'ttl_anak','jenkel_anak','anak_ke','pegawai_id'
    ];

    public function pegawais(){
        return $this->belongsTo('Pegawai');
    }
}
