<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KenaikanPangkat extends Model
{
    protected $fillable = [
        'nip', 'golongan','tahun','pegawai_id'
    ];

     public function pegawais(){
        return $this->belongsTo('Pegawai');
    }
}
