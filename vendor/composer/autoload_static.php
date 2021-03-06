<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfbd36c68d74cbd3a4c10c254bdc9701a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfbd36c68d74cbd3a4c10c254bdc9701a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfbd36c68d74cbd3a4c10c254bdc9701a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfbd36c68d74cbd3a4c10c254bdc9701a::$classMap;

        }, null, ClassLoader::class);
    }
}
