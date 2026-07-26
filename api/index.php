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
        '/tmp/bootstrap/cache',
    ];
    foreach ($dirs as $dir) {
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
    }

    // 2. Copy bootstrap cache files to /tmp so Laravel can read them
    $bootstrapCacheDir = __DIR__ . '/../bootstrap/cache';
    $tmpCacheDir = '/tmp/bootstrap/cache';
    foreach (glob($bootstrapCacheDir . '/*.php') as $file) {
        $dest = $tmpCacheDir . '/' . basename($file);
        if (!file_exists($dest)) {
            copy($file, $dest);
        }
    }

    // 3. Override Laravel paths to use /tmp
    putenv('LARAVEL_STORAGE_PATH=/tmp/storage');
    $_ENV['LARAVEL_STORAGE_PATH'] = '/tmp/storage';

    putenv('APP_SERVICES_CACHE=/tmp/bootstrap/cache/services.php');
    $_ENV['APP_SERVICES_CACHE'] = '/tmp/bootstrap/cache/services.php';

    putenv('APP_PACKAGES_CACHE=/tmp/bootstrap/cache/packages.php');
    $_ENV['APP_PACKAGES_CACHE'] = '/tmp/bootstrap/cache/packages.php';

    putenv('APP_CONFIG_CACHE=/tmp/bootstrap/cache/config.php');
    $_ENV['APP_CONFIG_CACHE'] = '/tmp/bootstrap/cache/config.php';

    putenv('APP_ROUTES_CACHE=/tmp/bootstrap/cache/routes.php');
    $_ENV['APP_ROUTES_CACHE'] = '/tmp/bootstrap/cache/routes.php';

    putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
    $_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';

    putenv('SESSION_DRIVER=cookie');
    $_ENV['SESSION_DRIVER'] = 'cookie';

    putenv('CACHE_DRIVER=array');
    $_ENV['CACHE_DRIVER'] = 'array';

    putenv('LOG_CHANNEL=stderr');
    $_ENV['LOG_CHANNEL'] = 'stderr';

    // 4. Load Laravel
    require __DIR__ . '/../public/index.php';

} catch (\Throwable $e) {
    echo "<h1>Laravel Boot Error</h1>";
    echo "<pre>";
    echo "Message: " . $e->getMessage() . "\n\n";
    echo "File: " . $e->getFile() . " (Line: " . $e->getLine() . ")\n\n";
    echo "Stack Trace:\n" . $e->getTraceAsString();
    echo "</pre>";
}
