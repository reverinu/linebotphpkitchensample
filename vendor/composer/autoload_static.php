<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc179b99cb86b7afa5f449c3ad260d16b
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc179b99cb86b7afa5f449c3ad260d16b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc179b99cb86b7afa5f449c3ad260d16b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
