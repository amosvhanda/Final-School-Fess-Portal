<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd2d54cf8fa6bf04e0a6ce6dd7c835b81
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitd2d54cf8fa6bf04e0a6ce6dd7c835b81::$classMap;

        }, null, ClassLoader::class);
    }
}