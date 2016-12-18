<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KenaikanPangkat extends Model
{
    protected $fillable = [
        'nip', 'golongan','tahun','pegawai_id','tahun_naik'
    ];

     public function pegawais(){
        return $this->belongsTo('Pegawai');
    }
}
