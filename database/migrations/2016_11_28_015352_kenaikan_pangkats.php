<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KenaikanPangkats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kenaikan_pangkats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip');
            $table->string('golongan');
            $table->string('tahun');
            $table->unsignedInteger('pegawai_id');
        

            $table->foreign('pegawaicm_id')->references('id')->on('pegawais')
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
        Schema::drop('kenaikan_pangkats');
    }
}
