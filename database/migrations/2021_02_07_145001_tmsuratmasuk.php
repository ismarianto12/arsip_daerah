<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tmsuratmasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tmsuratmasuk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_agenda', 20);
            $table->string('no_surat', 20);
            $table->string('asal_surat', 20);
            $table->string('isi', 20);
            $table->string('kode', 20);
            $table->string('indeks', 20);
            $table->string('tgl_surat', 20);
            $table->string('tgl_diterima', 20);
            $table->string('file', 20);
            $table->string('keterangan', 20);
            $table->string('tmsifatsurat_id', 20);
            $table->string('disposisi', 20);
            $table->smallInteger('user_id');
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
