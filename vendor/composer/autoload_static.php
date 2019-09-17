<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d60de4b55dbf2af47c0ca604700d464
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Framework\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Framework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Framework',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d60de4b55dbf2af47c0ca604700d464::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d60de4b55dbf2af47c0ca604700d464::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}