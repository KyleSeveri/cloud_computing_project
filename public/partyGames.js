/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function allGames() {
    //REST-service oproepen
    // URL definieren
    // omdat we POST-methode moeten we de parameters in de request steken
   // var title = document.getElementById("name").value;
    
        var url = "https://lockdownactivites.azurewebsites.net/api/drinkingGames";
    
    fetch(url)
       .then(response => response.json())
       .then(json => insertJsonIntoDiv(json));
}

function zoekGames() {
    //REST-service oproepen
    // URL definieren
    // omdat we POST-methode moeten we de parameters in de request steken
   // var title = document.getElementById("name").value;
    
        var url = "https://lockdownactivites.azurewebsites.net/api/drinkingGames";
    
    fetch(url)
       .then(response => response.json())
       .then(json => insertJsonIntoDivZoek(json));
}

function rate() {
    //REST-service oproepen
    // URL definieren
    // omdat we POST-methode moeten we de parameters in de request steken
   // var title = document.getElementById("name").value;
    
        var url = "https://lockdownactivites.azurewebsites.net/api/drinkingGames";
    
    fetch(url)
       .then(response => response.json())
       .then(json => insertJsonIntoDivRate(json));
}

function insertJsonIntoDivRate(partyGame){  
    
    
    var name = document.getElementById("title").innerHTML;
    var rating = document.getElementById("giveRating").value;
    
    var size = objectLength(partyGame);
    var id;
    
    for (i = 0; i < size; i++) {
            if(partyGame[i].name === name){
                id = i+1;
                break;
            }
    }
    if(rating>10){
        alert("Rating must be a value between 0 and 10")
    }
    else 
    {
    var url = "https://lockdownactivites.azurewebsites.net/api/drinkingGames" + "/" + id + "/" + rating ;
    
    fetch(url,{method:"post"})
       .then(response => response.json())
       .then(json => insertJsonIntoDivZoek(json));
       alert("Rating added succesfuly");
    }
    

       
}

function insertJsonIntoDivRating(partyGame) {
    
    var size = objectLength(partyGame);
    var name = document.getElementById("insert").value;
    var index;
    
    for (i = 0; i < size; i++) {
            if(partyGame[i].name === name){
                index = i;
                break;
            }
    }
    
    
    document.getElementById("title").innerHTML = partyGame[index].name;
    document.getElementById("description").innerHTML = partyGame[index].description;
    document.getElementById("ratingAverage").innerHTML = partyGame[index].rating;
  
}

function insertJsonIntoDiv(partyGame) {
    
    var size = objectLength(partyGame);
    

    var index = randomIntFromInterval(0, size)
    
    
    document.getElementById("title").innerHTML = partyGame[index].name;
    document.getElementById("description").innerHTML = partyGame[index].description;
    document.getElementById("ratingAverage").innerHTML = partyGame[index].rating;
  
}
function insertJsonIntoDivZoek(partyGame) {
    
    var size = objectLength(partyGame);
    var name = document.getElementById("insert").value;
    var index;
    
    for (i = 0; i < size; i++) {
            if(partyGame[i].name === name){
                index = i;
                break;
            }
    }
    
    
    document.getElementById("title").innerHTML = partyGame[index].name;
    document.getElementById("description").innerHTML = partyGame[index].description;
    document.getElementById("ratingAverage").innerHTML = partyGame[index].rating;
  
}

function objectLength(obj) {
  var result = 0;
  for(var prop in obj) {
    if (obj.hasOwnProperty(prop)) {
      result++;
    }
  }
  return result;
}
function randomIntFromInterval(min, max) {
  return Math.floor(Math.random() * (max - min + 1) + min);
}
