<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TmmenuApp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tmmenu_app', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_parent');
            $table->string('nama_menu');
            $table->string('icon');
            $table->string('link');
            $table->enum('aktif', [
                1,
                2
            ]);
            $table->integer('urutan');
            $table->integer('tmlevelakses_id');
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
