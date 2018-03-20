<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('match_id');
            $table->text('home_team');
            $table->text('away_team');
            $table->text('home_logo_url');
            $table->text('away_logo_url');
            $table->tinyInteger('score_home');
            $table->tinyInteger('score_away');
            $table->text('match_half');
            $table->boolean('game_played');
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
        Schema::dropIfExists('results');
    }
}
