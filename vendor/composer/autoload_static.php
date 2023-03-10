<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit90d24183a843172367b3450764058a50
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cisco\\Sublime\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cisco\\Sublime\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit90d24183a843172367b3450764058a50::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit90d24183a843172367b3450764058a50::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit90d24183a843172367b3450764058a50::$classMap;

        }, null, ClassLoader::class);
    }
}
