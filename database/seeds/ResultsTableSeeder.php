<?php

use Illuminate\Database\Seeder;
use App\HockeyMatch;
use App\Team;
use App\Result;

class ResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $matches = HockeyMatch::all();

        foreach($matches as $match) {

            $home_team = Team::find($match->team_home_id);
            $away_team = Team::find($match->team_away_id);

            Result::create(array(
                'match_id' => $match->id, 
                'half' => 'first' ,
                'home_team' => $home_team->team_name,                 
                'home_logo_url' => $home_team->logoUrl, 
                'away_team'=> $away_team->team_name, 
                'away_logo_url' => $away_team->logoUrl,
            ));

            Result::create(array(
                'match_id' => $match->id, 
                'half' => 'second' ,
                'home_team' => $home_team->team_name,                 
                'home_logo_url' => $home_team->logoUrl, 
                'away_team'=> $away_team->team_name, 
                'away_logo_url' => $away_team->logoUrl,
            ));
        }
    }
}