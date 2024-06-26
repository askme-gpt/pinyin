<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7caa7e81fbc2a15ac54a6c99054b352b
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Ysp\\Pinyin\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ysp\\Pinyin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7caa7e81fbc2a15ac54a6c99054b352b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7caa7e81fbc2a15ac54a6c99054b352b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7caa7e81fbc2a15ac54a6c99054b352b::$classMap;

        }, null, ClassLoader::class);
    }
}
