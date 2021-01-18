/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function zoek() {
    //REST-service oproepen
    // URL definieren
    // omdat we POST-methode moeten we de parameters in de request steken
    var title = document.getElementById("insert").value;
    
    var url = "http://www.omdbapi.com/?i=tt3896198&apikey=8b53f951&plot=full&t=" + title;
    
    fetch(url)
       .then(response => response.json())
       .then(json => insertJsonIntoDiv(json));
}

function insertJsonIntoDiv(film) {
    document.getElementById("title").innerHTML = film.Title;
    document.getElementById("description").innerHTML = film.Plot;
    document.getElementById("genre").innerHTML = film.Genre;
    document.getElementById("date").innerHTML = film.Released;
}

function random() {
    //REST-service oproepen
    // URL definieren
    // omdat we POST-methode moeten we de parameters in de request steken
    
    var randomPage = Math.floor(Math.random() * 101)+1;
    
    var url = "https://api.themoviedb.org/3/discover/movie?api_key=fb4817418d08c8e2729a3ffab3bf1b8a&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&api_key=fb4817418d08c8e2729a3ffab3bf1b8a&page=" + randomPage;
    
    fetch(url)
       .then(response => response.json())
       .then(json => insertJsonIntoView(json));
}

function insertJsonIntoView(film) {
    var randomMovie = Math.floor(Math.random() * 20);
    document.getElementById("title").innerHTML = film.results[randomMovie].title;
    document.getElementById("description").innerHTML = film.results[randomMovie].overview;
    var genre_id = film.results[randomMovie].genre_ids[0];
    var genre;
    
    if (genre_id == 28)
        {
            genre = "Action";
        }
        else if (genre_id == 12)
        {
            genre = "Adventure";
        }
        else if (genre_id == 16)
        {
            genre = "Animation";
        }
        else if (genre_id == 35)
        {
            genre = "Comedy";
        }
        else if (genre_id == 80)
        {
            genre = "Crime";
        }
        else if (genre_id == 99)
        {
            genre = "Documentary";
        }
        else if (genre_id == 18)
        {
            genre = "Drama";
        }
        else if (genre_id == 10751)
        { 
            genre = "Family";
        }
        else if (genre_id == 14)
        {
            genre = "Fantasy";
        }
        else if (genre_id == 36)
        {
            genre = "History";
        }
        else if (genre_id == 27)
        {
            genre = "Horror";
        }
        else if (genre_id == 10402)
        {
            genre = "Music";
        }
        else if (genre_id == 9648)
        {
            genre = "Mystery";
        }
        else if (genre_id == 10749)
        {
            genre = "Romance";
        }
        else if (genre_id == 878)
        {
            genre = "Science Fiction";
        }
        else if (genre_id == 10770)
        {
            genre = "TV Movie";
        }
        else if (genre_id == 53)
        {
            genre = "Thriller";
        }
        else if (genre_id == 10752)
        {
            genre = "War";
        }
        else
        {
            genre = "Western";
        }
    document.getElementById("genre").innerHTML = genre;
    document.getElementById("date").innerHTML = film.results[randomMovie].release_date;
}

function ratemovie() {
    //REST-service oproepen
    // URL definieren
    // omdat we POST-methode moeten we de parameters in de request steken
    var score = document.getElementById("score").value;
    var title = document.getElementById("title").value;
    
    var request = {
      Rating: score,
      Title: title
    };
    
    var url = "https://ratingapilockdownactivities.azurewebsites.net/postRating";
    
    fetch(url,
        {
            method: "post",
            headers: {'Content-type':'application/json'},
            body: JSON.stringify(request)            
        }
    )
       .then(response => response.json())
       .then(json => insertJsonIntoRated(json));
}

function insertJsonIntoRated(laptopLijst) {
    alert(json);
}

function getratingmovie() {
    //REST-service oproepen
    // URL definieren
    // omdat we POST-methode moeten we de parameters in de request steken
    var title = document.getElementById("score").value;
    
    var request = {
      Title: title
    };
    
    var url = "https://ratingapilockdownactivities.azurewebsites.net/getRating";
    
    fetch(url,
        {
            method: "post",
            headers: {'Content-type':'application/json'},
            body: JSON.stringify(request)            
        }
    )
       .then(response => response.json())
       .then(json => insertJsonIntoRating(json));
}

function insertJsonIntoRating(rating) {
    document.getElementById("drunkrating").innerHTML = rating.Rating;
}