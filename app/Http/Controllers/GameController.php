<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MarcReichel\IGDBLaravel\Models\Game;

class GameController extends Controller
{
    //
    public function index(){
        $games = Game::where('first_release_date', '>=', 1546297200)->get();
        return $games;
    }
    

    
}
