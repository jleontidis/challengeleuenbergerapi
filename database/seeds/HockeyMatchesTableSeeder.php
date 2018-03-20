<?php

use Illuminate\Database\Seeder;
use App\HockeyMatch;
use App\Team;

class HockeyMatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        HockeyMatch::create(array(
            'team_home_id' => 3,
            'team_away_id' => 4 ,
            'match_starting_time' => '2018-03-24 08:00' ,
            'match_location' => 'côté est',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 1,
            'team_away_id' => 2 ,
            'match_starting_time' => '2018-03-24 08:00' ,
            'match_location' => 'côté ouest (horloge)',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 7,
            'team_away_id' => 8 ,
            'match_starting_time' => '2018-03-24 08:40' ,
            'match_location' => 'côté est',
            'match_half' => 'first',
            'match_finished' => false
        ));

        
        HockeyMatch::create(array(
            'team_home_id' => 5,
            'team_away_id' => 6 ,
            'match_starting_time' => '2018-03-24 08:40' ,
            'match_location' => 'côté ouest (horloge)',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 2,
            'team_away_id' => 4 ,
            'match_starting_time' => '2018-03-24 09:35' ,
            'match_location' => 'côté est',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 1,
            'team_away_id' => 3 ,
            'match_starting_time' => '2018-03-24 09:35' ,
            'match_location' => 'côté ouest (horloge)',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 6,
            'team_away_id' => 8 ,
            'match_starting_time' => '2018-03-24 10:15' ,
            'match_location' => 'côté est',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 5,
            'team_away_id' => 7 ,
            'match_starting_time' => '2018-03-24 10:15' ,
            'match_location' => 'côté ouest (horloge)',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 3,
            'team_away_id' => 2 ,
            'match_starting_time' => '2018-03-24 11:10' ,
            'match_location' => 'côté est',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 1,
            'team_away_id' => 4 ,
            'match_starting_time' => '2018-03-24 11:10' ,
            'match_location' => 'côté ouest (horloge)',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 6,
            'team_away_id' => 7 ,
            'match_starting_time' => '2018-03-24 11:50' ,
            'match_location' => 'côté est',
            'match_half' => 'first',
            'match_finished' => false
        ));
    
        HockeyMatch::create(array(
            'team_home_id' => 5,
            'team_away_id' => 8 ,
            'match_starting_time' => '2018-03-24 11:50' ,
            'match_location' => 'côté ouest (horloge)',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 2,
            'team_away_id' => 6 ,
            'match_starting_time' => '2018-03-24 12:45' ,
            'match_location' => 'côté est',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 1,
            'team_away_id' => 5 ,
            'match_starting_time' => '2018-03-24 12:45' ,
            'match_location' => 'côté ouest (horloge)',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 4,
            'team_away_id' => 7 ,
            'match_starting_time' => '2018-03-24 13:25' ,
            'match_location' => 'côté est',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 3,
            'team_away_id' => 8 ,
            'match_starting_time' => '2018-03-24 13:25' ,
            'match_location' => 'côté ouest (horloge)',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 2,
            'team_away_id' => 5 ,
            'match_starting_time' => '2018-03-24 14:20' ,
            'match_location' => 'côté est',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 1,
            'team_away_id' => 6 ,
            'match_starting_time' => '2018-03-24 14:20' ,
            'match_location' => 'côté ouest (horloge)',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 4,
            'team_away_id' => 8 ,
            'match_starting_time' => '2018-03-24 15:00' ,
            'match_location' => 'côté est',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 3,
            'team_away_id' => 7 ,
            'match_starting_time' => '2018-03-24 15:00' ,
            'match_location' => 'côté ouest (horloge)',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 2,
            'team_away_id' => 8 ,
            'match_starting_time' => '2018-03-24 15:55' ,
            'match_location' => 'côté est',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 1,
            'team_away_id' => 7 ,
            'match_starting_time' => '2018-03-24 15:55' ,
            'match_location' => 'côté ouest (horloge)',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 4,
            'team_away_id' => 5 ,
            'match_starting_time' => '2018-03-24 16:35' ,
            'match_location' => 'côté est',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 3,
            'team_away_id' => 6 ,
            'match_starting_time' => '2018-03-24 16:35' ,
            'match_location' => 'côté ouest (horloge)',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 2,
            'team_away_id' => 7 ,
            'match_starting_time' => '2018-03-24 17:30' ,
            'match_location' => 'côté est',
            'match_half' => 'first',
            'match_finished' => false
        ));
        
        HockeyMatch::create(array(
            'team_home_id' => 1,
            'team_away_id' => 8 ,
            'match_starting_time' => '2018-03-24 17:30' ,
            'match_location' => 'côté ouest (horloge)',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 4,
            'team_away_id' => 6 ,
            'match_starting_time' => '2018-03-24 18:10' ,
            'match_location' => 'côté est',
            'match_half' => 'first',
            'match_finished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 3,
            'team_away_id' => 5 ,
            'match_starting_time' => '2018-03-24 18:10' ,
            'match_location' => 'côté ouest (horloge)',
            'match_half' => 'first',
            'match_finished' => false
        ));

        // HockeyMatch::create(array(
        //     'team_home_id' => 5,
        //     'team_away_id' => 6 ,
        //     'match_starting_time' => '2018-03-18 08:00' ,
        //     'match_location' => 'côté est 1/4 finale',
        //     'match_half' => 'first',
        //     'match_finished' => false
        // ));

        // HockeyMatch::create(array(
        //     'team_home_id' => 2,
        //     'team_away_id' => 1 ,
        //     'match_starting_time' => '2018-03-18 08:00' ,
        //     'match_location' => 'côté ouest (horloge) 1/4 finale',
        //     'match_half' => 'first',
        //     'match_finished' => false
        // ));

        // HockeyMatch::create(array(
        //     'team_home_id' => 3,
        //     'team_away_id' => 7 ,
        //     'match_starting_time' => '2018-03-18 08:40' ,
        //     'match_location' => 'côté est 1/4 finale',
        //     'match_half' => 'first',
        //     'match_finished' => false
        // ));

        // HockeyMatch::create(array(
        //     'team_home_id' => 4,
        //     'team_away_id' => 8 ,
        //     'match_starting_time' => '2018-03-18 08:40' ,
        //     'match_location' => 'côté ouest (horloge) 1/4 finale',
        //     'match_half' => 'first',
        //     'match_finished' => false
        // ));

    }
}