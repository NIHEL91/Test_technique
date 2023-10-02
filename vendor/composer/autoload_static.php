<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ad2a9f5d61e539b741aac3ae8dd2bc0
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Ess\\App\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ess\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3ad2a9f5d61e539b741aac3ae8dd2bc0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3ad2a9f5d61e539b741aac3ae8dd2bc0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3ad2a9f5d61e539b741aac3ae8dd2bc0::$classMap;

        }, null, ClassLoader::class);
    }
}
