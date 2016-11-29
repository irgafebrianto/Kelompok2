<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RiwayatPendidikans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_pendidikans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tahun');
            $table->string('pendidikan');
            $table->unsignedInteger('pegawai_id');
         

            $table->foreign('pegawai_id')->references('id')->on('pegawais')
                ->onUpdate('cascade')->onDelete('cascade');
            
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
        Schema::drop('riwayat_pendidikans');
    }
}
