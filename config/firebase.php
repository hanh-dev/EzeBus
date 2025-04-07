<?php

return [
    'database_url' => env('FIREBASE_DATABASE_URL', 'https://laravel-9b066-default-rtdb.firebaseio.com'),
    'credentials' => [
        'file' => env('FIREBASE_CREDENTIALS', base_path('firebase_credentials.json')),
    ],
];