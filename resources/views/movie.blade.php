<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" 
                src="{{ asset('javascript.js') }}"></script>
        <title>Lockdown activities</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body class="antialiased">
        <div class="container">
            <header>
                <img src="{{ asset('images/yoda.png') }}" alt="Logo for Adare Restaurant">
            </header>
            
            
            <nav>
                <a href="/">HOME</a>
                <a href="/movie">MOVIES</a>
                <a href="/game">GAMES</a>
                <a href="/party">PARTY GAMES</a>
            </nav>
            
            <div style="clear:both">
                <form name="zoekFilm">
                    <input name="insertMovie" id="insert" type="string"/>
                    @csrf
                    <button type="button" onclick="zoek()">Search movie</button>
                    <button type="button" onclick="random()">Search movie</button>
                </form>
            </div>

            <main>
                <h1 id="title">Title:{{ $movieTitle }}</h1>
                <h2 id="genre">Genre: {{ $genre }} </h2>
                <h2 id="date">Release date: {{ $date }}</h2>
                <h2>Recommended snack: {{ $snack }}</h2>
                <p id="description">Description: {{ $movieDescription }}</p>
                
            </main>
            
            <div style="clear:both">
                <form name="rateFilm">
                    Drunkrating: <h3 id="drunkrating"></h3>
                    <input name="insertScore" id="score" type="integer"/>
                    @csrf
                    <button type="button" onclick="ratemovie()">Rate movie</button>
                </form>
            </div>


            <footer>
                <p>Main St. Blackabbey. Adare. Co. Limerick - Copyright 20170</p>
            </footer>
        </div>
    </body>
</html>
