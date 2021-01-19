<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Artisaninweb\SoapWrapper\SoapWrapper; 
use App\SOAP\Snack;

class MovieController extends Controller
{
    public function index(){
        $response =  Http::get('https://api.themoviedb.org/3/discover/movie?api_key=fb4817418d08c8e2729a3ffab3bf1b8a&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=1',[
            'api_key' => 'fb4817418d08c8e2729a3ffab3bf1b8a',
            'page' => rand(1,100)
        ]);
        
        $data = json_decode($response, true);
        $randomMovie = rand(0,19);
        $movie = $data['results'][$randomMovie];
        $genre_id = $movie['genre_ids'][0];
        $movieTitle = $movie['title'];
        $movieDescription = $movie['overview'];
        $date = $movie['release_date'];
        
        if ($genre_id == 28)
        {
            $genre = "Action";
        }
        else if ($genre_id == 12)
        {
            $genre = "Adventure";
        }
        else if ($genre_id == 16)
        {
            $genre = "Animation";
        }
        else if ($genre_id == 35)
        {
            $genre = "Comedy";
        }
        else if ($genre_id == 80)
        {
            $genre = "Crime";
        }
        else if ($genre_id == 99)
        {
            $genre = "Documentary";
        }
        else if ($genre_id == 18)
        {
            $genre = "Drama";
        }
        else if ($genre_id == 10751)
        { 
            $genre = "Family";
        }
        else if ($genre_id == 14)
        {
            $genre = "Fantasy";
        }
        else if ($genre_id == 36)
        {
            $genre = "History";
        }
        else if ($genre_id == 27)
        {
            $genre = "Horror";
        }
        else if ($genre_id == 10402)
        {
            $genre = "Music";
        }
        else if ($genre_id == 9648)
        {
            $genre = "Mystery";
        }
        else if ($genre_id == 10749)
        {
            $genre = "Romance";
        }
        else if ($genre_id == 878)
        {
            $genre = "Science Fiction";
        }
        else if ($genre_id == 10770)
        {
            $genre = "TV Movie";
        }
        else if ($genre_id == 53)
        {
            $genre = "Thriller";
        }
        else if ($genre_id == 10752)
        {
            $genre = "War";
        }
        else
        {
            $genre = "Western";
        }
        
        
        $json = json_encode($movie);
        
        $sw = new SoapWrapper();
        $sw->add("SnackProvider",  function ($service) {
        $service->wsdl("https://snackprovider.azurewebsites.net/SnackProvider.asmx?WSDL") 
                   ->trace(true)
                   ->classmap([
                   Snack::class
                   ]);
        });
        
        $response = $sw->call("SnackProvider.GetSnack", [new Snack($genre_id)]);
        $snack = $response->GetSnackResult;
        
        
        
        
        return view('movie')->with("snack", $snack)
                            ->with("genre", $genre)
                            ->with("movieTitle", $movieTitle)
                            ->with("movieDescription", $movieDescription)
                            ->with("date", $date);
        
 
        
    }
}
