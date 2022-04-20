<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitda727e49729b385f707def9c01cf6d9a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitda727e49729b385f707def9c01cf6d9a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitda727e49729b385f707def9c01cf6d9a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitda727e49729b385f707def9c01cf6d9a::$classMap;

        }, null, ClassLoader::class);
    }
}
