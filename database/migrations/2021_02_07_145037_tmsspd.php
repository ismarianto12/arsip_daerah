<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tmsspd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tmsppd', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('letter_code', 40);
            $table->string('letter_subject', 40);
            $table->string('letter_about', 40);
            $table->string('letter_from', 40);
            $table->string('letter_content', 40);
            $table->string('letter_date', 40);
            $table->string('code', 40);
            $table->string('date', 40);
            $table->string('nip_pejabat', 40);
            $table->string('nip_leader', 40);
            $table->string('rate_travel', 40);
            $table->string('nip', 40);
            $table->string('purpose', 40);
            $table->string('transport', 40);
            $table->string('place_from', 40);
            $table->string('place_to', 40);
            $table->string('length_journey', 40);
            $table->string('date_go', 40);
            $table->string('date_back', 40);
            $table->string('government', 40);
            $table->string('budget', 40);
            $table->string('budget_from', 40);
            $table->string('description', 40);
            $table->string('result_date', 40);
            $table->string('result', 40);
            $table->string('result_username', 40);
            $table->string('file', 40);
            $table->string('file_update', 40);
            $table->string('status', 40);
            $table->string('user_id', 40);
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
