<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48223d50a592e22a09e6adf5aed03024
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit48223d50a592e22a09e6adf5aed03024::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit48223d50a592e22a09e6adf5aed03024::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit48223d50a592e22a09e6adf5aed03024::$classMap;

        }, null, ClassLoader::class);
    }
}