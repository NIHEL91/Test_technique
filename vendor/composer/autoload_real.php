<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit3ad2a9f5d61e539b741aac3ae8dd2bc0
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit3ad2a9f5d61e539b741aac3ae8dd2bc0', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit3ad2a9f5d61e539b741aac3ae8dd2bc0', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit3ad2a9f5d61e539b741aac3ae8dd2bc0::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
