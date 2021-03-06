<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit856839122e45bd9ffbf8a7231f1d1c86
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Engine\\DI\\' => 10,
            'Engine\\' => 7,
        ),
        'C' => 
        array (
            'Cms\\' => 4,
        ),
        'A' => 
        array (
            'Admin\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Engine\\DI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/engine/DI',
        ),
        'Engine\\' => 
        array (
            0 => __DIR__ . '/../..' . '/engine',
        ),
        'Cms\\' => 
        array (
            0 => __DIR__ . '/../..' . '/cms',
        ),
        'Admin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/admin',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit856839122e45bd9ffbf8a7231f1d1c86::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit856839122e45bd9ffbf8a7231f1d1c86::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit856839122e45bd9ffbf8a7231f1d1c86::$classMap;

        }, null, ClassLoader::class);
    }
}
