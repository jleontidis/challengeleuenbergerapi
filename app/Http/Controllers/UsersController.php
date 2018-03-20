<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as Controller;

class UsersController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getAll(){
        return 'All users';
    }

    public function getUser($userid){
        return 'User with id: ' . $userid;
    }
}
