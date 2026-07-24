<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
*/

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

// Vercel: use /tmp for writable paths
if (!empty($_ENV['LARAVEL_STORAGE_PATH'])) {
    $app->useStoragePath($_ENV['LARAVEL_STORAGE_PATH']);
}

// Redirect bootstrap cache to /tmp (Vercel deployment is read-only)
if (!is_writable(dirname(__DIR__) . '/bootstrap/cache')) {
    @mkdir('/tmp/bootstrap/cache', 0777, true);
    $app->useBootstrapPath('/tmp/bootstrap');
}

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
*/

return $app;
