<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatPendidikan extends Model
{
    protected $fillable = [
        'tahun', 'pendidikan','pegawai_id'
    ];

     public function pegawais(){
        return $this->belongsTo('App\Pegawai');
    }
}
