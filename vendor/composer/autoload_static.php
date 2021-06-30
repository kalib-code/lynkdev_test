<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit763af6e115402332dd8a990c02279e3e
{
    public static $prefixesPsr0 = array (
        'j' => 
        array (
            'johnpbloch\\Composer\\' => 
            array (
                0 => __DIR__ . '/..' . '/johnpbloch/wordpress-core-installer/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit763af6e115402332dd8a990c02279e3e::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit763af6e115402332dd8a990c02279e3e::$classMap;

        }, null, ClassLoader::class);
    }
}