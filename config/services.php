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
    'facebook' => [
        'client_id' => '908355717022907', //USE FROM FACEBOOK DEVELOPER ACCOUNT
        'client_secret' => '1b28967ce3bb48a65ec0690ee47b974d', //USE FROM FACEBOOK DEVELOPER ACCOUNT
        'redirect' => 'http://localhost:8000/facebook/callback/'
    ],
    'google' => [
        'client_id' => '378425854995-7sgdaqqe5hnm3qhilhjig4dkspn02vvb.apps.googleusercontent.com', //USE FROM Google DEVELOPER ACCOUNT
        'client_secret' => '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', //USE FROM Google DEVELOPER ACCOUNT
        'redirect' => 'http://localhost:8000/google/callback/'
    ],

];
