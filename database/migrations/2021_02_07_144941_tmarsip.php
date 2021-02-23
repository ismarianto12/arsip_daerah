<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tmarsip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tmarsip', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trjenisarip_id', 30);
            $table->string('tmpegawai_id', 30);
            $table->string('nama_arsip', 30);
            $table->string('file_arsip', 30);
            $table->string('jumlah', 30);
            $table->string('tmsatuan_id', 5);
            $table->string('tmlokasiarsip_id', 30);
            $table->string('ket_isi', 30);
            $table->string('permision', 30);
            $table->string('user_id', 30);
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
        //
    }
}
