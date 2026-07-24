<?php
// Step 1: Check if vendor/autoload exists
if (!file_exists(__DIR__ . '/../vendor/autoload.php')) {
    die('FATAL: vendor/autoload.php not found. Run composer install.');
}

// Step 2: Check if .env or environment variables exist
if (!file_exists(__DIR__ . '/../.env') && !getenv('APP_KEY') && !isset($_ENV['APP_KEY'])) {
    die('FATAL: No .env file and no APP_KEY environment variable found.');
}

// Step 3: Create writable directories in /tmp
$dirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/storage/app',
];
foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0777, true);
    }
}

// Override storage path via environment before Laravel boots
putenv('LARAVEL_STORAGE_PATH=/tmp/storage');
$_ENV['LARAVEL_STORAGE_PATH'] = '/tmp/storage';

// Step 4: Load Laravel
require __DIR__ . '/../public/index.php';
