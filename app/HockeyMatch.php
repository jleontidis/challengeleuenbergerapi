<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HockeyMatch extends Model
{
  protected $table = 'hockeymatch';

  protected $fillable = [
      'team_home_id', 'team_away_id', 'match_starting_time', 'match_location', 'match_half', 'match_finished'
  ];
}
