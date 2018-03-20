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
            'match_time' => '2018-03-24 08:00' ,
            'location' => 'côté est',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 1,
            'team_away_id' => 2 ,
            'match_time' => '2018-03-24 08:00' ,
            'location' => 'côté ouest (horloge)',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 7,
            'team_away_id' => 8 ,
            'match_time' => '2018-03-24 08:40' ,
            'location' => 'côté est',
            'half' => 'first',
            'isFinished' => false
        ));

        
        HockeyMatch::create(array(
            'team_home_id' => 5,
            'team_away_id' => 6 ,
            'match_time' => '2018-03-24 08:40' ,
            'location' => 'côté ouest (horloge)',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 2,
            'team_away_id' => 4 ,
            'match_time' => '2018-03-24 09:35' ,
            'location' => 'côté est',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 1,
            'team_away_id' => 3 ,
            'match_time' => '2018-03-24 09:35' ,
            'location' => 'côté ouest (horloge)',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 6,
            'team_away_id' => 8 ,
            'match_time' => '2018-03-24 10:15' ,
            'location' => 'côté est',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 5,
            'team_away_id' => 7 ,
            'match_time' => '2018-03-24 10:15' ,
            'location' => 'côté ouest (horloge)',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 3,
            'team_away_id' => 2 ,
            'match_time' => '2018-03-24 11:10' ,
            'location' => 'côté est',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 1,
            'team_away_id' => 4 ,
            'match_time' => '2018-03-24 11:10' ,
            'location' => 'côté ouest (horloge)',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 6,
            'team_away_id' => 7 ,
            'match_time' => '2018-03-24 11:50' ,
            'location' => 'côté est',
            'half' => 'first',
            'isFinished' => false
        ));
    
        HockeyMatch::create(array(
            'team_home_id' => 5,
            'team_away_id' => 8 ,
            'match_time' => '2018-03-24 11:50' ,
            'location' => 'côté ouest (horloge)',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 2,
            'team_away_id' => 6 ,
            'match_time' => '2018-03-24 12:45' ,
            'location' => 'côté est',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 1,
            'team_away_id' => 5 ,
            'match_time' => '2018-03-24 12:45' ,
            'location' => 'côté ouest (horloge)',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 4,
            'team_away_id' => 7 ,
            'match_time' => '2018-03-24 13:25' ,
            'location' => 'côté est',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 3,
            'team_away_id' => 8 ,
            'match_time' => '2018-03-24 13:25' ,
            'location' => 'côté ouest (horloge)',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 2,
            'team_away_id' => 5 ,
            'match_time' => '2018-03-24 14:20' ,
            'location' => 'côté est',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 1,
            'team_away_id' => 6 ,
            'match_time' => '2018-03-24 14:20' ,
            'location' => 'côté ouest (horloge)',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 4,
            'team_away_id' => 8 ,
            'match_time' => '2018-03-24 15:00' ,
            'location' => 'côté est',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 3,
            'team_away_id' => 7 ,
            'match_time' => '2018-03-24 15:00' ,
            'location' => 'côté ouest (horloge)',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 2,
            'team_away_id' => 8 ,
            'match_time' => '2018-03-24 15:55' ,
            'location' => 'côté est',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 1,
            'team_away_id' => 7 ,
            'match_time' => '2018-03-24 15:55' ,
            'location' => 'côté ouest (horloge)',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 4,
            'team_away_id' => 5 ,
            'match_time' => '2018-03-24 16:35' ,
            'location' => 'côté est',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 3,
            'team_away_id' => 6 ,
            'match_time' => '2018-03-24 16:35' ,
            'location' => 'côté ouest (horloge)',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 2,
            'team_away_id' => 7 ,
            'match_time' => '2018-03-24 17:30' ,
            'location' => 'côté est',
            'half' => 'first',
            'isFinished' => false
        ));
        
        HockeyMatch::create(array(
            'team_home_id' => 1,
            'team_away_id' => 8 ,
            'match_time' => '2018-03-24 17:30' ,
            'location' => 'côté ouest (horloge)',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 4,
            'team_away_id' => 6 ,
            'match_time' => '2018-03-24 18:10' ,
            'location' => 'côté est',
            'half' => 'first',
            'isFinished' => false
        ));

        HockeyMatch::create(array(
            'team_home_id' => 3,
            'team_away_id' => 5 ,
            'match_time' => '2018-03-24 18:10' ,
            'location' => 'côté ouest (horloge)',
            'half' => 'first',
            'isFinished' => false
        ));

        // HockeyMatch::create(array(
        //     'team_home_id' => 5,
        //     'team_away_id' => 6 ,
        //     'match_time' => '2018-03-18 08:00' ,
        //     'location' => 'côté est 1/4 finale',
        //     'half' => 'first',
        //     'isFinished' => false
        // ));

        // HockeyMatch::create(array(
        //     'team_home_id' => 2,
        //     'team_away_id' => 1 ,
        //     'match_time' => '2018-03-18 08:00' ,
        //     'location' => 'côté ouest (horloge) 1/4 finale',
        //     'half' => 'first',
        //     'isFinished' => false
        // ));

        // HockeyMatch::create(array(
        //     'team_home_id' => 3,
        //     'team_away_id' => 7 ,
        //     'match_time' => '2018-03-18 08:40' ,
        //     'location' => 'côté est 1/4 finale',
        //     'half' => 'first',
        //     'isFinished' => false
        // ));

        // HockeyMatch::create(array(
        //     'team_home_id' => 4,
        //     'team_away_id' => 8 ,
        //     'match_time' => '2018-03-18 08:40' ,
        //     'location' => 'côté ouest (horloge) 1/4 finale',
        //     'half' => 'first',
        //     'isFinished' => false
        // ));

    }
}