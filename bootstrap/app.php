<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// Tangani lingkungan Serverless Vercel
if (isset($_ENV['VERCEL']) || isset($_SERVER['VERCEL'])) {
    $storagePath = '/tmp/storage';

    if (!is_dir($storagePath)) {
        mkdir($storagePath . '/framework/views', 0755, true);
        mkdir($storagePath . '/framework/cache/data', 0755, true);
        mkdir($storagePath . '/framework/sessions', 0755, true);
        mkdir($storagePath . '/logs', 0755, true);
    }

    // Paksa log ke stderr agar dibaca Vercel Logs
    $_ENV['LOG_CHANNEL'] = 'stderr';
    putenv('LOG_CHANNEL=stderr');
    
    $_ENV['VIEW_COMPILED_PATH'] = $storagePath . '/framework/views';
    putenv('VIEW_COMPILED_PATH=' . $storagePath . '/framework/views');
}

return Application::configure(basePath: dirname(__DIR__))
    ->booted(function ($app) {
        if (isset($_ENV['VERCEL']) || isset($_SERVER['VERCEL'])) {
            $app->useStoragePath('/tmp/storage');
            $app['config']->set('view.compiled', '/tmp/storage/framework/views');
            $app['config']->set('cache.stores.file.path', '/tmp/storage/framework/cache/data');
            $app['config']->set('logging.default', 'stderr');
        }
    })
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();