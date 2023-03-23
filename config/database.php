<?php

return [
    'default' => env('DB_CONNECTION', 'pgsql'),
    'connections' => [
        'pgsql' => [
            'driver'   => 'pgsql',
            'host'     => env('DB_HOST', 'localhost'),
            'database' => env('DB_DATABASE', 'postgres'), // This seems to be ignored
            'port'     => env('DB_PORT', 5432),
            'username' => env('DB_USERNAME', 'postgres'),
            'password' => env('DB_PASSWORD', 'password'),
            'charset'  => 'utf8',
            'prefix'   => '',
            'schema'   => 'public'
        ]
    ]
];