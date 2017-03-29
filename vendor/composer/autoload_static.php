<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1b406cd8fae747d6a82fb658ff56543c
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'model\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/model',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1b406cd8fae747d6a82fb658ff56543c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1b406cd8fae747d6a82fb658ff56543c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
