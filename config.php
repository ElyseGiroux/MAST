<?php

// First check .env file if it exists
if (file_exists(__DIR__ . '/.env')) {
    $envFile = parse_ini_file(__DIR__ . '/.env');
    if (isset($envFile['APP_ENV'])) {
        putenv("APP_ENV=" . $envFile['APP_ENV']);
    }
}

// Environment-specific configurations
$environments = [
    'production' => [
        'url' => 'https://internet.dfo-mpo.gc.ca',
        'base_path' => '/marine-accelerator-for-sustainable-technologies'
    ],
    'development' => [
        'url' => 'http://internet.local',
        'base_path' => '/marine-accelerator-for-sustainable-technologies'
    ]
];

// Determine environment (can be set via server environment variable)
$environment = getenv('APP_ENV') ?: 'development';

// Set the constants based on environment
define('SITE_URL', $environments[$environment]['url']);
define('BASE_URL', $environments[$environment]['base_path']);

?>
