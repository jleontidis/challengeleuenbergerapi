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
            $table->dateTime('match_time');
            $table->string('location');
            $table->tinyInteger('score_home');
            $table->tinyInteger('score_away');
            $table->tinyInteger('score_home_2');
            $table->tinyInteger('score_away_2');
            $table->string('half');
            $table->boolean('isFinished');
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