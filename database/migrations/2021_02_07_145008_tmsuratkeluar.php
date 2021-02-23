<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tmsuratkeluar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tmsuratkeluar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('trsifatsurat_id', 10);
            $table->string('no_agenda', 20);
            $table->string('tujuan', 20);
            $table->string('no_surat', 20);
            $table->text('isi');
            $table->string('kode', 20);
            $table->enum('status_baca', [
                1,
                2
            ]);
            $table->date('tgl_surat');
            $table->date('tgl_catat');
            $table->string('file', 20);
            $table->string('keterangan', 20);
            $table->string('user_id', 20);
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
