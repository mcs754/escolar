<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit629c670577098cb2278ad570f2412f40
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vendas\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vendas\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Vendas',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit629c670577098cb2278ad570f2412f40::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit629c670577098cb2278ad570f2412f40::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
