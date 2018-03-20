<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
  protected $table = 'results';

  protected $fillable = [
      'match_id', 'home_team', 'home_logo_url' ,'away_team', 'away_logo_url' ,'score_home', 'score_away', 'match_half', 'game_started'
  ];
}