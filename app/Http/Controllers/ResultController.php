<?php

namespace App\Http\Controllers;

use App\Result;
use App\HockeyMatch;
use App\Team;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Return a json object with all matchs in the database.
     *
     * @return json - All matchs available
     */
    public function list(){

        $results = DB::select("select 
                                    team_name,
                                    logo_url, 
                                    count(*) played, 
                                    count(case when goalsfor > goalsagainst then 1 end) wins, 
                                    count(case when goalsagainst > goalsfor then 1 end) lost, 
                                    count(case when goalsfor = goalsagainst then 1 end) draws, 
                                    sum(goalsfor) goalsfor, 
                                    sum(goalsagainst) goalsagainst, 
                                    sum(goalsfor) - sum(goalsagainst) goal_diff,
                                    sum(
                                        case when goalsfor > goalsagainst then 2 else 0 end 
                                        + case when goalsfor = goalsagainst then 1 else 0 end
                                    ) score 
                                from (
                                    select game_played, home_team as team_name, home_logo_url as logo_url, score_home as goalsfor, score_away as goalsagainst from results where game_played = 1
                                union all
                                    select game_played, away_team, away_logo_url, score_away as goalsagainst, score_home as goalsfor from results where game_played = 1
                                ) a
                                group by team_name
                                order by score desc, goal_diff desc;");

        $results2 = DB::select("select 
                                team_name,
                                logo_url, 
                                0 played, 
                                count(case when goalsfor > goalsagainst then 1 end) wins, 
                                count(case when goalsagainst > goalsfor then 1 end) lost, 
                                case when goalsfor = goalsagainst then 0 end draws, 
                                sum(goalsfor) goalsfor, 
                                sum(goalsagainst) goalsagainst, 
                                sum(goalsfor) - sum(goalsagainst) goal_diff,
                                0 score 
                            from (
                                select game_played, home_team as team_name, home_logo_url as logo_url, score_home as goalsfor, score_away as goalsagainst from results where game_played = 0
                            union all
                                select game_played, away_team, away_logo_url, score_away as goalsagainst, score_home as goalsfor from results where game_played = 0
                            ) a
                            group by team_name 
                            order by team_name desc;");


        foreach($results as $key=>$result) {
            
            foreach($results2 as $key2=>$result2) {

                if($result->team_name === $result2->team_name) {
                    array_splice($results2, $key2, 1);
                }
            }
        }
        
        $result = array_merge($results, $results2);
        
        return response()->json($result);
    }

    /**
     * Return a json object with the information of one match in the database.
     *
     * @return json - All clients available
     */
    public function find($id){

        $result = Result::find($id);

        return response()->json($result);
    }
    
     /**
     * Creates a new match.
     *
     * @return json - The created match
     */
    public function create(Request $request){

        $result = Result::create($request->all());

        return response()->json($result);
    }

    /**
     * Updates an existing match.
     *
     * @return json - The created match
     */
    public function update(Request $request, $id){

        $result = Result::find($id);

        $result = $result->update($request->all());

        return response()->json(['updated' => $result]);
    }

     /**
     * Deletes an existing match.
     *
     * @return json - If the operation was successful or not
     */
    public function delete($id){

        $result = Result::find($id);
        
        $count = $result->delete($id);

        return response()->json(['deleted' => $count == 1]);
    }
}
