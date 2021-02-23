<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tmdisposisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tmdisposisi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tujuan', 20);
            $table->string('isi_disposisi', 20);
            $table->string('sifat', 20);
            $table->string('batas_waktu', 20);
            $table->string('catatan', 20);
            $table->string('tmsurat_id');
            $table->enum('keterangan', [
                1,
                2
            ]);
            $table->string('user_id');
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
