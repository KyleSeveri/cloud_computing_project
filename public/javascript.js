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
    //document.getElementById("title").innerHTML = film.Title;
    //alert(film.Title);
    /*var totaal = 0;
    for (laptop of laptopLijst) {
        totaal = totaal + laptop.prijs;
    }
    document.getElementById('gevondenLaptops').innerHTML 
            = "Er zijn " + laptopLijst.length + " laptops gevonden voor in het totaal € " + totaal;*/
}