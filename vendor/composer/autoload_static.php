<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite104635e9ecf9a10b5433cf3ef03491e
{
    public static $files = array (
        '538ca81a9a966a6716601ecf48f4eaef' => __DIR__ . '/..' . '/opis/closure/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\view\\driver\\' => 18,
            'think\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
            'Psr\\Cache\\' => 10,
        ),
        'O' => 
        array (
            'Opis\\Closure\\' => 13,
        ),
        'L' => 
        array (
            'League\\Flysystem\\Cached\\' => 24,
            'League\\Flysystem\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\view\\driver\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-view/src',
        ),
        'think\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/framework/src/think',
            1 => __DIR__ . '/..' . '/topthink/think-cache/src',
            2 => __DIR__ . '/..' . '/topthink/think-container/src',
            3 => __DIR__ . '/..' . '/topthink/think-log/src',
            4 => __DIR__ . '/..' . '/topthink/think-orm/src',
            5 => __DIR__ . '/..' . '/topthink/think-template/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'Opis\\Closure\\' => 
        array (
            0 => __DIR__ . '/..' . '/opis/closure/src',
        ),
        'League\\Flysystem\\Cached\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem-cached-adapter/src',
        ),
        'League\\Flysystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem/src',
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/../..' . '/extend',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite104635e9ecf9a10b5433cf3ef03491e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite104635e9ecf9a10b5433cf3ef03491e::$prefixDirsPsr4;
            $loader->fallbackDirsPsr0 = ComposerStaticInite104635e9ecf9a10b5433cf3ef03491e::$fallbackDirsPsr0;

        }, null, ClassLoader::class);
    }
}
