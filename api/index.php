<?php
/**
 * Vercel entry point for Laravel
 */

// Create writable directories in /tmp (Vercel's only writable location)
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

// Tell Laravel to use /tmp/storage
putenv('LARAVEL_STORAGE_PATH=/tmp/storage');
$_ENV['LARAVEL_STORAGE_PATH'] = '/tmp/storage';

// Boot Laravel
require __DIR__ . '/../public/index.php';
