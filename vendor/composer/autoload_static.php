<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit40f3b6fec3da7f2633f436b80351bb28
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'SimplePie' => 
            array (
                0 => __DIR__ . '/..' . '/simplepie/simplepie/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit40f3b6fec3da7f2633f436b80351bb28::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit40f3b6fec3da7f2633f436b80351bb28::$classMap;

        }, null, ClassLoader::class);
    }
}
