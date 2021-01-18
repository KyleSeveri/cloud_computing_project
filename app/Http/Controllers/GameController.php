<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MarcReichel\IGDBLaravel\Models\Game;
use Illuminate\Support\Facades\Http;

class GameController extends Controller
{
    //
    public function index(){
       
        
        $games = Game::where('aggregated_rating', '>=', 90)->limit(150)->get();
        $random = rand(0,150);
        $name = (json_encode($games[$random]['name']));
        $summary = (json_encode($games[$random]['summary']));
        $url = (json_encode($games[$random]['url']));
     
        return view('game')->with("name",$name)
                            ->with("summary",$summary)
                            ->with("url",$url);
    }
}