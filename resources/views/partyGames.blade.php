<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" 
                src="{{ asset('partyGames.js') }}"></script>
        <title>Lockdown activities</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body class="antialiased">
        <div class="container">
            <header>
                <img src="{{ asset('images/yoda.png') }}" alt="Lockdown activities logo">
            </header>
          

            <nav>
                <a href="/">HOME</a>
                <a href="/movie">MOVIES</a>
                <a href="/game">GAMES</a>
                <a href="/party">PARTY GAMES</a>
            </nav>
              <div style="clear:both">
                <form name="zoekPartyGame">
                    <input name="insertMovie" id="insert" type="string"/>
                    @csrf
                    <button type="button" onclick="zoekGames()">Search party game</button>
                </form>
            </div>
             <div style="clear:both">
                <form name="zoekPartyGame"> 
                    @csrf
                    <button type="button" onclick="allGames()">Random party game</button>
                </form>

            <div>
                <h1 id="title"></h1>
                <p id="description"></p>
                <p id="ratingAverage"></p>
                
            </div>
            
            </div>
                <div style="clear:both">
                 <form name="giveRating">
                    <input name="insertRating" id="giveRating" type="string"/>
                    @csrf
                    <button type="button" onclick="rate()">Rating out of 10</button>
                </form>
            </div>
            
            <footer>
                <p>Florian Coenen - Kyle Severi - Copyright 20170</p>
            </footer>
    
        </div>
    </body>
</html>
