<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0c15edc0231b00b9e9835af2c597d786
{
    public static $files = array (
        'e403d3d6d0467106a2c3a2ccbed1baf2' => __DIR__ . '/../..' . '/sistema/configuracao.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'sistema\\' => 8,
        ),
        'P' => 
        array (
            'Pecee\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'sistema\\' => 
        array (
            0 => __DIR__ . '/../..' . '/sistema',
        ),
        'Pecee\\' => 
        array (
            0 => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0c15edc0231b00b9e9835af2c597d786::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0c15edc0231b00b9e9835af2c597d786::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0c15edc0231b00b9e9835af2c597d786::$classMap;

        }, null, ClassLoader::class);
    }
}