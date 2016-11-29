<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $fillable = [
        'nama', 'nip','alamat','ttl','jenkel','agama','kebangsaan','telpon','golongan','nama_istri','pekerjaan_istri'
    ];




    public function riwayat_pendidikans(){
        return $this->hasMany('RiwayatPendidikan');
    }

    public function kenaikan_pangkats(){
        return $this->hasMany('KenaikanPangkat');
    }
    public function data_anakas(){
        return $this->hasMany('DataAnak');
    }

    public function data_kepegawaians()
    {
        return $this->hasOne('DataKepegawaian');
    }

    
    public function users()
    {
        return $this->hasOne('User');
    }
}
