<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team', function (Blueprint $table) {
            $table->increments('id');
            $table->string('team_name');
            $table->tinyInteger('games_played');
            $table->string('logoUrl');
            $table->tinyInteger('noOfWins');
            $table->tinyInteger('noOfLoses');
            $table->tinyInteger('noOfDraws');
            $table->tinyInteger('noOfGoalsFor');
            $table->tinyInteger('noOfGoalsAgainst');
            $table->tinyInteger('noOfPoints');
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
        Schema::dropIfExists('team');
    }
}