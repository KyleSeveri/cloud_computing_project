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
                <img src="{{ asset('images/yoda.png') }}" alt="Lockdown activities logo">
            </header>
            
            
            <nav>
                <a href="/">HOME</a>
                <a href="/movie">MOVIES</a>
                <a href="/serie">SERIES</a>
                <a href="/game">GAMES</a>
                <a href="/party">PARTY GAMES</a>
            </nav>
            
            <div style="clear:both">
                <form name="zoekSerie">
                    <input name="insertSerie" id="insert" type="string"/>
                    @csrf
                    <button type="button" onclick="zoek()">Search serie</button>
                    <button type="button" onclick="randomserie()">Random serie</button>
                </form>
            </div>

            <div>
                <h1 id="title">Title:{{ $movieTitle }}</h1>
                <h2 id="genre">Genre: {{ $genre }} </h2>
                <h2 id="date">Release date: {{ $date }}</h2>
                <h2>Recommended snack: {{ $snack }}</h2>
                <p id="description">Description: {{ $movieDescription }}</p>
                
            </div>
            
            <div style="clear:both">
                <form name="rateFilm">
                    Binge rating: <h3 id="bingerating"></h3>
                    <input name="insertScore" id="bingescore" type="integer"/>
                    @csrf
                    <button type="button" onclick="rateserie()">Rate serie</button>
                </form>
            </div>
            
            <footer>
                <p>Florian Coenen - Kyle Severi - Copyright 20170</p>
            </footer>
        </div>
    </body>
</html>
