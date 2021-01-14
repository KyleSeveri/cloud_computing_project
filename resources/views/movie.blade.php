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
            <<h1>{{ $quote }} </h1>

            <nav>
                <a href="/">HOME</a>
                <a href="#">MOVIES</a>
                <a href="#">GAMES</a>
                <a href="#">PARTY GAMES</a>
            </nav>

            <main>
                <h1>let's watch</h1>
                <p>Are you bored? Have you seen every movie on your watchlist? Let faith decide what movie you'll watch next</p>
                <a href="mailto:daniel@mywebsite.com?Subject=Reservation">MAKE RESERVATION</a>
            </main>

            <section class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d628.6505528402623!2d5.339490329217579!3d50.93107509872153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c12181f3cdf099%3A0xec49133b62f33764!2sZuivelmarkt%2C%203500%20Hasselt!5e0!3m2!1snl!2sbe!4v1606172361662!5m2!1snl!2sbe" width="1024" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/RGdtqX6f6-o" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </section>

            <footer>
                <p>Main St. Blackabbey. Adare. Co. Limerick - Copyright 20170</p>
            </footer>
        </div>
    </body>
</html>
