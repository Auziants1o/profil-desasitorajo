<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

try {
    // 1. Create writable directories
    $dirs = [
        '/tmp/storage/framework/views',
        '/tmp/storage/framework/cache/data',
        '/tmp/storage/framework/sessions',
        '/tmp/storage/logs',
        '/tmp/storage/app',
    ];
    foreach ($dirs as $dir) {
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
    }

    // 2. Override Laravel paths
    putenv('LARAVEL_STORAGE_PATH=/tmp/storage');
    $_ENV['LARAVEL_STORAGE_PATH'] = '/tmp/storage';
    
    putenv('APP_SERVICES_CACHE=/tmp/storage/framework/cache/services.php');
    $_ENV['APP_SERVICES_CACHE'] = '/tmp/storage/framework/cache/services.php';
    
    putenv('APP_PACKAGES_CACHE=/tmp/storage/framework/cache/packages.php');
    $_ENV['APP_PACKAGES_CACHE'] = '/tmp/storage/framework/cache/packages.php';
    
    putenv('APP_CONFIG_CACHE=/tmp/storage/framework/cache/config.php');
    $_ENV['APP_CONFIG_CACHE'] = '/tmp/storage/framework/cache/config.php';
    
    putenv('APP_ROUTES_CACHE=/tmp/storage/framework/cache/routes.php');
    $_ENV['APP_ROUTES_CACHE'] = '/tmp/storage/framework/cache/routes.php';
    
    putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
    $_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
    
    putenv('SESSION_DRIVER=cookie');
    $_ENV['SESSION_DRIVER'] = 'cookie';
    
    putenv('CACHE_DRIVER=array');
    $_ENV['CACHE_DRIVER'] = 'array';
    
    putenv('LOG_CHANNEL=stderr');
    $_ENV['LOG_CHANNEL'] = 'stderr';

    // 3. Load Laravel
    require __DIR__ . '/../public/index.php';

} catch (\Throwable $e) {
    echo "<h1>Laravel Boot Error</h1>";
    echo "<pre>";
    echo "Message: " . $e->getMessage() . "\n\n";
    echo "File: " . $e->getFile() . " (Line: " . $e->getLine() . ")\n\n";
    echo "Stack Trace:\n" . $e->getTraceAsString();
    echo "</pre>";
}
