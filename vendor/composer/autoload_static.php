<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b6c868c2f119f3c69df0ba1c10609e5
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PokePHP\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PokePHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/danrovito/pokephp/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b6c868c2f119f3c69df0ba1c10609e5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b6c868c2f119f3c69df0ba1c10609e5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3b6c868c2f119f3c69df0ba1c10609e5::$classMap;

        }, null, ClassLoader::class);
    }
}
