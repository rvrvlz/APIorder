<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6708d945ef4da8b864f80a69f7857905
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6708d945ef4da8b864f80a69f7857905::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6708d945ef4da8b864f80a69f7857905::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6708d945ef4da8b864f80a69f7857905::$classMap;

        }, null, ClassLoader::class);
    }
}
