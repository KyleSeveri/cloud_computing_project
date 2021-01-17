<?php

return [
    /*
     * These are the credentials you got from https://dev.twitch.tv/console/apps
     */
    'credentials' => [
        'client_id' => env('vvwkw7taygsfh8zv6fm97f21zwmbt', ''),
        'client_secret' => env('fu63fy9nqylnz5l1gucnz0tifb42fw', ''),
    ],

    /*
     * This package caches queries automatically (for 1 hour per default).
     * Here you can set how long each query should be cached (in seconds).
     *
     * To turn cache off set this value to 0
     */
    'cache_lifetime' => env('IGDB_CACHE_LIFETIME', 3600),

    /*
     * This is the per-page limit for your tier.
     */
    'per_page_limit' => 500,
];
