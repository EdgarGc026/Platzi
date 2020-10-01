<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb67f35c89e7ffadf5f2f9975fae74395
{
    public static $files = array (
        'cdd565bc1a6bf72d4aa0d7f2b0c5f159' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Text\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Text\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb67f35c89e7ffadf5f2f9975fae74395::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb67f35c89e7ffadf5f2f9975fae74395::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}