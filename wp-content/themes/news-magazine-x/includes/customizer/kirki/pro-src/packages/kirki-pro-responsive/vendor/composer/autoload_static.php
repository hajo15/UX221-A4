<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfce553b9a6fa4102465a84b7e770c06c
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kirki\\Pro\\Responsive\\' => 21,
            'Kirki\\Pro\\Field\\' => 16,
            'Kirki\\Pro\\Control\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kirki\\Pro\\Responsive\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Kirki\\Pro\\Field\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Field',
        ),
        'Kirki\\Pro\\Control\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Control',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfce553b9a6fa4102465a84b7e770c06c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfce553b9a6fa4102465a84b7e770c06c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfce553b9a6fa4102465a84b7e770c06c::$classMap;

        }, null, ClassLoader::class);
    }
}
