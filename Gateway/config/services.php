<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'user'   =>  [
        'base_uri'  =>  env('USER_SERVICE_BASE_URL'),
        'secret'  =>  env('USER_SERVICE_SECRET'),
    ],
    
    //Post Microservice
    'post'  =>  [
        'base_uri'  =>  env('POST_SERVICE_BASE_URL'),
        'secret'  =>  env('POST_SERVICE_SECRET'),
    ],
    //Comment API Microservice
    'comment'  =>  [
        'base_uri'  =>  env('COMMENT_SERVICE_BASE_URL'),
        'secret'  =>  env('COMMENT_SERVICE_SECRET'),
    ],
    //OAUTH Server URL
    'oauth'  =>  [
        'base_uri'  =>  env('OAUTH_BASE_URL'),
        'secret'  =>  env('OAUTH_SECRET'),
    ],
];
