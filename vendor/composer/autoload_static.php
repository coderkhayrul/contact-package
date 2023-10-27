<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3beb440cd9aa523619411f96bef581a5
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Khayrulshanto\\Contact\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Khayrulshanto\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3beb440cd9aa523619411f96bef581a5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3beb440cd9aa523619411f96bef581a5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3beb440cd9aa523619411f96bef581a5::$classMap;

        }, null, ClassLoader::class);
    }
}