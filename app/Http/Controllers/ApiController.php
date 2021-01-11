<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DrinkingGame;

class ApiController extends Controller
{
    public function getAllDrinkingGames() {
        $drinkingGames = DrinkingGame::get()->toJson(JSON_PRETTY_PRINT);
        return response($drinkingGames, 200);
    }
    
    public function createDrinkingGame(Request $request) {
        $drinkingGame = new DrinkingGame();
        $drinkingGame->name = $request->name;
        $drinkingGame->description = $request->description;
        $drinkingGame->save();
        
        return response()->json([
            "message" => "drinking game record created"
        ], 201);
    }
    
    public function getDrinkingGame($id) {
        if (DrinkingGame::where('id', $id)->exists()) {
            $drinkingGame = DrinkingGame::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($drinkingGame, 200);
          } else {
            return response()->json([
              "message" => "drinking game not found"
            ], 404);
          }
    }
    
    public function updateRatingDrinkingGame(Request $request, $id, $rating) {
        if (DrinkingGame::where('id', $id)->exists()) {
            if(0 <= $rating && $rating <= 10){
                $drinkingGame = DrinkingGame::find($id);
                $drinkingGame->rating = is_null($drinkingGame->rating) ? $rating : (($drinkingGame->rating * $drinkingGame->nb_ratings) + $rating)/($drinkingGame->nb_ratings + 1);
                $drinkingGame->nb_ratings = $drinkingGame->nb_ratings + 1;
                $drinkingGame->save();
                
                return response()->json([
                "message" => "records updated successfully"
                ], 200);
            } else {
                return response()->json([
                "message" => "rating is not between 0 and 10"
            ], 404);
            }
        } 
        else {
            return response()->json([
                "message" => "drinking game not found"
            ], 404);

        }
    }
    
    public function deleteDrinkingGame($id) {
        if(DrinkingGame::where('id', $id)->exists()) {
        $drinkingGame = DrinkingGame::find($id);
        $drinkingGame->delete();

        return response()->json([
          "message" => "records deleted"
        ], 202);
      } else {
        return response()->json([
          "message" => "drinking game not found"
        ], 404);
      }
    }
}
