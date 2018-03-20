<?php

use Illuminate\Database\Seeder;
use App\Team;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = ['Saint-Imier','Bienne','Neuchâtel','Chx-de-Fds','Ambri-Piotta','GCK / ZSC','Berne', 'Langnau'];
        $prefix = 'assets/img/';
        $logos = [ 'stimier', 'biel', 'neuchatel', 'chxdefds', 'ambri', 'zurich', 'bern' ,'langnau'];
        
        for( $i = 0; $i < count($teams); $i++) {

            Team::create(array(
                'team_name' => $teams[$i],
                'logoUrl' => $prefix . $logos[$i] . '.png'
            ));
        }
    }
}
