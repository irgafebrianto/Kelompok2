<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pegawais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('pegawais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('nip');
            $table->string('alamat');
            $table->string('ttl');
            $table->string('jenkel');
            $table->string('agama');
            $table->string('kebangsaan');
            $table->string('telpon');
            $table->string('golongan');
            $table->string('nama_istri');
            $table->string('pekerjaan_istri');

            //belum di foreign 

            
            
            $table->softDeletes();
            $table->timestamps();
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pegawais');
    }
}
