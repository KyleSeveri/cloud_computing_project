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
                <img src="{{ asset('images/yoda.png') }}" alt="Lockdown activities logo">
            </header>

            <nav>
                <a href="/">HOME</a>
                <a href="/movie">MOVIES</a>
                <a href="/serie">SERIES</a>
                <a href="/game">GAMES</a>
                <a href="/party">PARTY GAMES</a>
            </nav>
            
            <main>
                <h1>What to do tonight?</h1>
                <p>
                    Have you seen every movie or serie on your watchlist? Have you collected every achievement in all of your games? Don't you know anymore what to do during the pandamic? No worry, check out the different sections of the lockdown activities to let faith decide what you'll do tonight and maybe you'll find your next favourite movie or game!
                </p>
            </main>
            
            <<h1>{{ $quote }} </h1>

            <footer>
                <p>Florian Coenen - Kyle Severi - Copyright 20170</p>
            </footer>
        </div>
    </body>
</html>
