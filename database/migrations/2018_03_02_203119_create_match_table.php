<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hockeymatch', function (Blueprint $table) {
            $table->increments('id');
            $table->string('team_home_id');
            $table->string('team_away_id');
            $table->dateTime('match_starting_time');
            $table->string('match_location');
            $table->string('match_half');
            $table->boolean('match_finished');
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
        Schema::dropIfExists('hockeymatch');
    }
}