<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataKepegawaians extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('data_kepegawaians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jabatan');
            $table->string('golongan');
            $table->string('status');
            $table->string('pangkat');
            $table->string('masa_kerja');
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
        Schema::drop('datake_pegawaians');
    }
}
