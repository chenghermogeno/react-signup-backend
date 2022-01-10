<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdeb7dfb1c4e0900d910933662c352ab4
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdeb7dfb1c4e0900d910933662c352ab4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdeb7dfb1c4e0900d910933662c352ab4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
