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
    //Shipment API Microservice
    'shipment'   =>  [
        'base_uri'  =>  env('SHIPMENT_SERVICE_BASE_URL'),
        'secret'  =>  env('SHIPMENT_SERVICE_SECRET'),
    ],
    //CMS API Microservice
    'cms'   =>  [
        'base_uri'  =>  env('CMS_SERVICE_BASE_URL'),
        'secret'  =>  env('CMS_SERVICE_SECRET'),
    ],
    //Address Book API Microservice (ab for address book)
    'ab'   =>  [
        'base_uri'  =>  env('ADDRESSBOOK_SERVICE_BASE_URL'),
        'secret'  =>  env('ADDRESSBOOK_SERVICE_SECRET'),
    ],
    //Logs API Microservice
    'logs'  =>  [
        'base_uri'  =>  env('LOGS_SERVICE_BASE_URL'),
        'secret'  =>  env('LOGS_SERVICE_SECRET'),
    ],
    //Notifications API Microservice
    'notifications'  =>  [
        'base_uri'  =>  env('NOTIFICATIONS_SERVICE_BASE_URL'),
        'secret'  =>  env('NOTIFICATIONS_SERVICE_SECRET'),
    ],
    //Message API Microservice
    'message'  =>  [
        'base_uri'  =>  env('MESSAGE_SERVICE_BASE_URL'),
        'secret'  =>  env('MESSAGE_SERVICE_SECRET'),
    ],
    //Miscellaneous API Microservice
    'misc'  =>  [
        'base_uri'  =>  env('MISC_SERVICE_BASE_URL'),
        'secret'  =>  env('MISC_SERVICE_SECRET'),
    ],
    //Wallet API Microservice
    'wallet'  =>  [
        'base_uri'  =>  env('WALLET_SERVICE_BASE_URL'),
        'secret'  =>  env('WALLET_SERVICE_SECRET'),
    ],
    //SCHEDULE API Microservice
    'schedule'  =>  [
        'base_uri'  =>  env('SCHEDULE_SERVICE_BASE_URL'),
        'secret'  =>  env('SCHEDULE_SERVICE_SECRET'),
    ],
    //OAUTH Server URL
    'oauth'  =>  [
        'base_uri'  =>  env('OAUTH_BASE_URL'),
        'secret'  =>  env('OAUTH_SECRET'),
    ],
];
