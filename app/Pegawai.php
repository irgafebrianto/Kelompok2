<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pegawai extends Model
{
    protected $fillable = [
        'nama', 'nip','alamat','ttl','jenkel','agama','kebangsaan','telpon','golongan','nama_istri','pekerjaan_istri','user_id'
    ];




    public function riwayat_pendidikans(){
        return $this->hasMany('App\RiwayatPendidikan');
    }

    public function kenaikan_pangkats(){
        return $this->hasMany('App\KenaikanPangkat');
    }
    public function data_anaks(){
        return $this->hasMany('App\DataAnak');
    }

    public function data_kepegawaians()
    {
        return $this->hasOne('App\DataKepegawaian');
    }

    
    public function users()
    {
        return $this->hasOne('App\User');
    }
}
