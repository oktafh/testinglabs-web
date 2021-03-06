<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit_Mesmerize_Companion
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mesmerize\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mesmerize\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit_Mesmerize_Companion::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit_Mesmerize_Companion::$prefixDirsPsr4;

        }, null, get_class($loader));
    }
}
