<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tmjabatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voidswn
     */
    public function up()
    {
        //
        Schema::create('tmjabatan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('create_by');
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
        //
    }
}
