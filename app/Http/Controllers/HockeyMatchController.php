<?php

namespace App\Http\Controllers;

use App\HockeyMatch;
use App\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HockeyMatchController extends Controller
{
    /**
     * Return a json object with all matchs in the database.
     *
     * @return json - All matchs available
     */
    public function list(){

        $matches = DB::table('hockeymatch')
        ->where('match_finished', '<>', '1')
        ->get();

        return response()->json($matches);
    }

    /**
     * Return a json object with the information of one match in the database.
     *
     * @return json - All clients available
     */
    public function find($id){

        $match = HockeyMatch::find($id);

        return response()->json($match);
    }
    
     /**
     * Creates a new match.
     *
     * @return json - The created match
     */
    public function create(Request $request){

        $match = HockeyMatch::create($request->all());

        return response()->json($match);
    }

    /**
     * Updates an existing match.
     *
     * @return json - The created match
     */
    public function update(Request $request, $id){

        $match = HockeyMatch::find($id);

        
        if(array_key_exists('match_half',$request->all())){
            $result_first_half = Result::where(['match_id' => $id, 'match_half' => 'first'])->first();
             $result_second_half = Result::where(['match_id' => $id, 'match_half' => 'second'])->first();
            
            if($result_first_half && $request->half  === 'first') {
                $result_first_half->score_home = $request->score_home;
                $result_first_half->score_away = $request->score_away;
                $result_first_half->game_played = $request->game_played;
                
                $result_first_half->update((array)$result_first_half);
            } 
            
            if ($result_second_half && $request->half === 'second') {
                $result_second_half->score_home = $request->score_home_2;
                $result_second_half->score_away = $request->score_away_2;
                $result_second_half->game_played = $request->game_played;
                
                $result_second_half->update((array)$result_second_half);
            } 
        }
                   
        $match = $match->update($request->all());

        return response()->json(['updated' => $match]);
    }

     /**
     * Deletes an existing match.
     *
     * @return json - If the operation was successful or not
     */
    public function delete($id){

        $match = HockeyMatch::find($id);
        
        $count = $match->delete($id);

        return response()->json(['deleted' => $count == 1]);
    }
}
