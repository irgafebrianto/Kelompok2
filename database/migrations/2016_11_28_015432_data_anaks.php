<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataAnaks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('data_anaks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_anak');
            $table->string('ttl_anak');
            $table->string('jenkel_anak');
            $table->string('anak_ke');
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
        Schema::drop('data_anaks');
    }
}
