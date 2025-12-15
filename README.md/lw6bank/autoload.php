<?php

declare(strict_types=1);

spl_autoload_register(static function (string $class): void {
    $prefix = 'Bank\\';
    $baseDir = __DIR__ . DIRECTORY_SEPARATOR;

    if (str_starts_with($class, $prefix)) {
        $relativeClass = substr($class, strlen($prefix));
        $file = $baseDir . str_replace('\\', DIRECTORY_SEPARATOR, $relativeClass) . '.php';

        if (is_file($file)) {
            require $file;
        }
    }
});
