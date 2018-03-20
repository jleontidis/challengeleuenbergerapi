<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HockeyMatch extends Model
{
  protected $table = 'hockeymatch';

  protected $fillable = [
      'team_home_id', 'team_away_id', 'match_time', 'location', 'score_home', 'score_away', 'score_home_2', 'score_away_2', 'half', 'isFinished'
  ];
}
