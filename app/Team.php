<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
  protected $table = 'team';

  protected $fillable = [
      'team_name', 'logoUrl',  'games_played', 'noOfWins', 'noOfLoses', 'noOfDraws', 'noOfGoalsFor', 'noOfGoalsAgainst','noOfPoints'
  ];
  
}
