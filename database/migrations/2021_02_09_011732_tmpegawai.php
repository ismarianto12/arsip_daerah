<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tmpegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tmpegawai', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nip');
            $table->string('nama');
            $table->string('no_hp');
            $table->string('alamat');
            $table->enum('jk', [
                1,
                2
            ]);
            $table->string('agama');
            $table->string('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('golongan');
            $table->string('golongan_tanggal');
            $table->integer('tmjabatan_id');
            $table->string('jabatan_tanggal');
            $table->string('kerja_tahun');
            $table->string('kerja_bulan');
            $table->string('pendidikan');
            $table->string('pendidikan_lulus');
            $table->string('pendidikan_ijazah');
            $table->string('catatn_mutasi');
            $table->string('keterangan');
            $table->string('user_id');
            $table->enum('status_delete', [
                1,
                2
            ]);
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
