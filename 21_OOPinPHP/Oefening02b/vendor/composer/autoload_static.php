<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitca12556aaafb578dc3df9c4e246edec9
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Util\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Util\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Util',
        ),
    );

    public static $classMap = array (
        'Util\\Date' => __DIR__ . '/../..' . '/src/Util/Date.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitca12556aaafb578dc3df9c4e246edec9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitca12556aaafb578dc3df9c4e246edec9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitca12556aaafb578dc3df9c4e246edec9::$classMap;

        }, null, ClassLoader::class);
    }
}
