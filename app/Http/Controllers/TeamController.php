<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Return a json object with all teams in the database.
     *
     * @return json - All teams available
     */
    public function list(){

        $teams = Team::all();

        return response()->json($teams);
    }

    /**
     * Return a json object with the information of one team in the database.
     *
     * @return json - All clients available
     */
    public function find($id){

        $team = Team::find($id);

        return response()->json($team);
    }
    
     /**
     * Creates a new team.
     *
     * @return json - The created team
     */
    public function create(Request $request){

        $team = Team::create($request->all());

        return response()->json($team);
    }

    /**
     * Updates an existing team.
     *
     * @return json - The created team
     */
    public function update(Request $request, $id){

        $team = Team::find($id);

        $team = $team->update($request->all());

        return response()->json(['updated' => $team]);
    }

     /**
     * Deletes an existing team.
     *
     * @return json - If the operation was successful or not
     */
    public function delete($id){

        $team = Team::find($id);
        
        $count = $team->delete($id);

        return response()->json(['deleted' => $count == 1]);
    }
}
