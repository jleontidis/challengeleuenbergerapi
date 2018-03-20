<?php

namespace App\Http\Controllers;

use App\HockeyMatch;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Return a json object with all teams in the database.
     *
     * @return json - All teams available
     */
    public function list(){

        $matches = HockeyMatch::all();

        return response()->json($matches);
    }

}
