<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Foursquare CID
    |--------------------------------------------------------------------------
    |
    | Here's where you can define your Foursquare client id.
    |
    */

    'client_id' => env('F_CLIENT_ID'),

    /*
    |--------------------------------------------------------------------------
    | Foursquare CIS
    |--------------------------------------------------------------------------
    |
    | Here's where you can define your Foursquare client secret.
    |
    */

    'client_secret' => env('F_CLIENT_SECRET'),

    /*
    |--------------------------------------------------------------------------
    | Foursquare URL
    |--------------------------------------------------------------------------
    |
    | Here's where you can define your Foursquare api url address.
    |
    */

    'api_url' => env('F_API_URL', 'https://api.foursquare.com/v2/'),

];
