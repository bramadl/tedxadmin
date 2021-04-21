<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokaHastaKaryasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loka_hasta_karya', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('email');
            $table->string('nomor_wa');
            $table->string('instansi_komunitas');
            $table->string('media_sosial');
            $table->string('bentuk_karya');
            $table->text('judul_karya');
            $table->string('deskripsi_karya');
            $table->integer('tahun_pembuatan_karya');
            $table->string('file_karya');
            $table->string('sumber_informasi');
            $table->string('status');
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
        Schema::dropIfExists('loka_hasta_karya');
    }
}
