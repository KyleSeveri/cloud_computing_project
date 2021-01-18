<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <a href="/api/drinkingGame">PARTY GAMES</a>
            </nav>

            <main>
                <h1>Title:{{ $movieTitle }}</h1>
                <h2>Genre: {{ $genre }}      Release date: {{ $date }}</h2>
                <h2>Recommended snack: {{ $snack }}</h2>
                <p>Description: {{ $movieDescription }}</p>
                
            </main>


            <footer>
                <p>Main St. Blackabbey. Adare. Co. Limerick - Copyright 20170</p>
            </footer>
        </div>
    </body>
</html>
