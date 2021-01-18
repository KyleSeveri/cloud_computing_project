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
                <a href="/party">PARTY GAMES</a>
            </nav>

            <main>
                <h1>Title:{{ $name }}</h1>
                <h2>URL: {{ $url }}></a></h2>
                <p>Description: {{ $summary }}</p>
                
            </main>


            <footer>
                <p>Main St. Blackabbey. Adare. Co. Limerick - Copyright 20170</p>
            </footer>
        </div>
    </body>
</html>
