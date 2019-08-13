<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita75186dfd559bdb0c34aef70db9f3c34
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rakit\\Validation\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rakit\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/rakit/validation/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita75186dfd559bdb0c34aef70db9f3c34::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita75186dfd559bdb0c34aef70db9f3c34::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}