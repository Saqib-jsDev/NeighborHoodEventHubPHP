<?php 
return [
    'db' => [
        'host'    => $_ENV['DB_HOST'] ?? '127.0.0.1',
        'dbname'  => $_ENV['DB_NAME'] ?? 'event_app',
        'user'    => $_ENV['DB_USER'] ?? 'root',
        'pass'    => $_ENV['DB_PASS'] ?? '',
        'charset' => 'utf8mb4'
    ],

    'jwt' => [
        'secret' => $_ENV['JWT_SECRET'] ?? 'eventhub-career',
        'issuer' => $_ENV['JWT_ISSUER'] ?? 'http://localhost',
        'aud'    => $_ENV['JWT_AUD'] ?? 'http://localhost',
        'expiry' => $_ENV['JWT_EXPIRY'] ?? 3600
    ]
];
