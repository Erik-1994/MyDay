<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit623db8d2d61da6c71ca15b6d0f892ea6
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit623db8d2d61da6c71ca15b6d0f892ea6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit623db8d2d61da6c71ca15b6d0f892ea6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
